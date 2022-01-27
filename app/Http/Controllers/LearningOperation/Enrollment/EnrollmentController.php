<?php

namespace App\Http\Controllers\LearningOperation\Enrollment;

use App\Http\Controllers\Controller;
use App\Http\Requests\LearningAdmin\Store\StoreEnrollmentRequest;
use App\Http\Requests\LearningAdmin\Store\StoreExcelFileRequest;
use App\Imports\EnrollmentClassImport;
use App\Imports\EnrollmentElearningImport;
use App\Models\Elearning;
use App\Models\Enrollment;
use App\Models\TrainingClass;
use App\Models\User;
use App\Notifications\EnrollmentClass;
use App\Notifications\EnrollmentElearning;
use DB;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Notification;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $elearnings = Elearning::get(['id', 'name']);
        $trainingclasses = TrainingClass::get(['id', 'name']);

        return view('LearningOperation.Enrollment.index', compact('elearnings', 'trainingclasses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        if ($request->elearning_id) {
            foreach ($request->users as $user) {
                Enrollment::create([
                    'elearning_id' => $request->elearning_id,
                    'user_id' => $user,
                    'status' => 'working',
                    'start_date' => $request->start_date,
                    'end_date' => $request->end_date
                ]);
                Notification::send(User::findOrFail($user), new EnrollmentElearning($request->elearning_id));
            }
        } else {
            foreach ($request->users as $user) {
                Enrollment::create([
                    'class_id' => $request->class_id,
                    'user_id' => $user,
                    'status' => 'working',
                ]);
                Notification::send(User::findOrFail($user), new EnrollmentClass($request->class_id));
            }
        }

        toast('Enrollment Successfully Added', 'success');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enrollment $enrollment)
    {
        $enrollment->destroy(request('enrollment')->id);

        toast('Enrollment Successfully Deleted', 'success');

        return redirect()->back();
    }

    // Elearning
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createElearning($elearning_id)
    {
        $training = Elearning::findOrFail($elearning_id);
        $users = User::all();

        $enrolled_users = DB::table('enrollments')->where('elearning_id', '=', $elearning_id)->select('user_id')->get();

        $enrolled_ids = [];
        foreach ($enrolled_users as $enrolled_user) {
            $enrolled_ids[] = $enrolled_user->user_id;
        }

        $type = 'elearning';

        return view('LearningOperation.Enrollment.create', compact('training', 'users', 'type', 'enrolled_ids'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showElearning($elearning_id)
    {
        $training = Elearning::findOrFail($elearning_id);
        $users = DB::table('users')->join('enrollments', 'users.id', '=', 'enrollments.user_id')->selectRaw('users.nik, users.id, users.name, users.title, users.organization, enrollments.elearning_id, enrollments.id as enroll_id, enrollments.status, enrollments.start_date, enrollments.end_date')->where('elearning_id', '=', $elearning_id)->get();
        $type = 'elearning';

        return view('LearningOperation.Enrollment.show', compact('training', 'users', 'type'));
    }

    // Class
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createClass($class_id)
    {
        $training = TrainingClass::findOrFail($class_id);
        $users = User::all();
        $type = 'class';

        $enrolled_users = DB::table('enrollments')->where('class_id', '=', $class_id)->select('user_id')->get();

        $enrolled_ids = [];
        foreach ($enrolled_users as $enrolled_user) {
            $enrolled_ids[] = $enrolled_user->user_id;
        }

        return view('LearningOperation.Enrollment.create', compact('training', 'users', 'type', 'enrolled_ids'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showClass($class_id)
    {
        $training = TrainingClass::findOrFail($class_id);
        $users = DB::table('users')->join('enrollments', 'users.id', '=', 'enrollments.user_id')->selectRaw('users.nik, users.id, users.name, users.title, users.organization, enrollments.class_id, enrollments.id as enroll_id, enrollments.status')->where('class_id', '=', $class_id)->get();
        $type = 'class';

        return view('LearningOperation.Enrollment.show', compact('training', 'users', 'type'));
    }

    public function import(StoreExcelFileRequest $request, $type, $id)
    {
        if ($type == 'class') {
            Excel::import(new EnrollmentClassImport($id), $request->file('file'));
        } else {
            Excel::import(new EnrollmentElearningImport($id), $request->file('file'));
        }

        toast('Enrollment Successfully Created', 'success');

        return redirect()->route('learning-operation.enrollment.index');
    }
}
