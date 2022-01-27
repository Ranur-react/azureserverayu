<?php

namespace App\Http\Controllers\LearningNeedAnalysis;

use App\Http\Controllers\Controller;
use App\Models\Hcbp;
use App\Models\User;
use App\Models\UserNeed;
use App\Notifications\UserNeedsHcbpApprove;
use App\Notifications\UserNeedsHcbpReject;
use App\Notifications\UserNeedsLearningDesignApprove;
use App\Notifications\UserNeedsLearningDesignReject;
use Auth;
use DataTables;
use DB;
use Illuminate\Http\Request;
use Notification;

class RequestTrainingController extends Controller
{
    public function index()
    {
        $hcbp_count = Hcbp::where('nik', Auth::user()->employee->nik)->count();

        if (Auth::user()->can('training_request_access') || $hcbp_count > 0) {
            $user_needs_hcbp = UserNeed::with('userNeedStatus')
            ->select('id', 'name_of_program', 'created_at', 'status_id')
            ->where('hcbp_nik', Auth::user()->employee->nik)
            ->get();
    
            $user_needs = UserNeed::with('userNeedStatus')
            ->select('id', 'name_of_program', 'created_at', 'status_id')
            ->get();
    
            return view('LearningNeedAnalysis.UserNeeds.RequestTraining.index', compact(
                'user_needs',
                'user_needs_hcbp',
                'hcbp_count'
            ));
        } else {
            abort(404);
        }
    }

    public function edit(UserNeed $user_need)
    {
        $hcbp_count = Hcbp::where('nik', Auth::user()->employee->nik)->count();
        
        if (Auth::user()->can('training_request_access') || $hcbp_count > 0) {
            foreach ($user_need->syllabus->prfCompetencyCatalog as $competency) {
                $competency_names[] = $competency->name;
                $string_name = implode(", ", $competency_names);
            }
    
            return view('LearningNeedAnalysis.UserNeeds.RequestTraining.Edit', compact(
                'user_need',
                'string_name',
                'hcbp_count'
            ));
        } else {
            abort(404);
        }
    }

    public function getUserNeedAjaxEmployees(UserNeed $user_need)
    {
        $hcbp_count = Hcbp::where('nik', Auth::user()->employee->nik)->count();

        if (Auth::user()->can('training_request_access') || $hcbp_count > 0) {
            $query = DB::table('user_need_employee')
            ->join('user_needs', 'user_need_employee.user_need_id', '=', 'user_needs.id')
            ->join('employee', 'user_need_employee.nik', '=', 'employee.nik')
            ->where('user_need_id', $user_need->id)
            ->select(['employee.nik', 'employee.name', 'employee.division', 'employee.bgroup']);

            return DataTables::of($query)
            ->toJson();
        } else {
            abort(404);
        }
    }

    public function approveHcbp(UserNeed $user_need)
    {
        $hcbp_count = Hcbp::where('nik', Auth::user()->employee->nik)->count();

        abort_if($hcbp_count == 0, 403);

        abort_if($user_need->status_id != 1, 403);

        $user_need->update([
            'status_id' => 3
        ]);

        activity()
        ->performedOn($user_need)
        ->event('Approved By HCBP')
        ->log('updated');

        activity()
        ->performedOn($user_need)
        ->event('Waiting For Learning Architect')
        ->log('updated');

        $created_by = User::where('nik', $user_need->created_by_nik)->first();

        Notification::send($created_by, new UserNeedsHcbpApprove($user_need));

        toast('Request Training Successfully Approved', 'success');

        return redirect()->route('learning-need-analysis.user-needs.request-training.index');
    }

    public function rejectHcbp(Request $request, UserNeed $user_need)
    {
        $hcbp_count = Hcbp::where('nik', Auth::user()->employee->nik)->count();

        abort_if($hcbp_count == 0, 403);

        abort_if($user_need->status_id != 1, 403);

        $user_need->update([
            'status_id' => 2
        ]);

        if (empty($request->reason_hcbp)) {
            activity()
            ->performedOn($user_need)
            ->event('Rejected By HCBP')
            ->log('updated');
        } else {
            activity()
            ->performedOn($user_need)
            ->event('Rejected By HCBP')
            ->withProperties([
                'attributes' => [
                    'reason_hcbp' => $request->reason_hcbp
                ]
            ])
            ->log('updated');
        }
    
        $created_by = User::where('nik', $user_need->created_by_nik)->first();

        Notification::send($created_by, new UserNeedsHcbpReject($user_need));

        toast('Request Training Successfully Rejected', 'success');

        return redirect()->route('learning-need-analysis.user-needs.request-training.index');
    }

    public function approveLearningDesign(UserNeed $user_need)
    {
        $this->authorize('training_request_edit');

        abort_if($user_need->status_id != 3, 403);

        $user_need->update([
            'status_id' => 5
        ]);

        activity()
        ->performedOn($user_need)
        ->event('Approved By Learning Architect')
        ->log('updated');

        $created_by = User::where('nik', $user_need->created_by_nik)->first();

        Notification::send($created_by, new UserNeedsLearningDesignApprove($user_need));

        toast('Request Training Successfully Approved', 'success');

        return redirect()->route('learning-need-analysis.user-needs.request-training.index');
    }

    public function rejectLearningDesign(UserNeed $user_need)
    {
        $this->authorize('training_request_edit');

        abort_if($user_need->status_id != 3, 403);

        $user_need->update([
            'status_id' => 4
        ]);

        activity()
        ->performedOn($user_need)
        ->event('Rejected By Learning Architect')
        ->log('updated');

        $created_by = User::where('nik', $user_need->created_by_nik)->first();

        Notification::send($created_by, new UserNeedsLearningDesignReject($user_need));

        toast('Request Training Successfully Rejected', 'success');

        return redirect()->route('learning-need-analysis.user-needs.request-training.index');
    }
}
