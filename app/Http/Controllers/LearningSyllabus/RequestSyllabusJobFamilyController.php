<?php

namespace App\Http\Controllers\LearningSyllabus;

use App\Http\Controllers\Controller;
use App\Models\JobFamily;
use App\Models\RequestSyllabus;
use App\Models\Syllabus;
use App\Models\User;
use App\Notifications\ALDRequestSyllabusApprove;
use App\Notifications\ALDRequestSyllabusReject;
use App\Notifications\SyllabusApprove;
use App\Notifications\SyllabusReject;
use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;
use Notification;

class RequestSyllabusJobFamilyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id, JobFamily $jobFamily)
    {
        $this->authorize('learning_syllabus_approve');

        $syllabus = Syllabus::findOrFail($id);
        if ($syllabus->job_family_id != $jobFamily->id) {
            abort(404);
        }

        $max_number = $jobFamily->syllabuses()->where('status_id', 1)->max('number') + 1;

        $activities  = Activity::with('causer')->where('subject_type', 'App\Models\Syllabus')
            ->where('subject_id', $syllabus->id)
            ->get();

        return view('LearningSyllabus.RequestSyllabus.SyllabusJobFamily.edit', compact('syllabus', 'jobFamily', 'activities', 'max_number'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, JobFamily $jobFamily)
    {
        $this->authorize('learning_syllabus_approve');
        $syllabus = Syllabus::findOrFail($id);
        $max_number = $jobFamily->syllabuses()->where('status_id', 1)->max('number') + 1;
        $strpadMaxNumber = str_pad($max_number, 2, '0', STR_PAD_LEFT);
        $user_syllabus = User::where('nik', $syllabus->created_by)->first();
        $request_syllabus = RequestSyllabus::where('syllabus_id', $syllabus->id)->first();
        if ($syllabus->job_family_id != $jobFamily->id) {
            abort(404);
        }
        $syllabus->update([
            'syllabus_code' => "$jobFamily->job_family_code.$strpadMaxNumber",
            'number' => $max_number,
            'status_id' => '1',
        ]);

        if ($request_syllabus) {
            $request_syllabus->update([
                'status_id' => 2
            ]);
            $user = User::where('id', $request_syllabus->created_by)->first();

            Notification::send($user, new ALDRequestSyllabusApprove($request_syllabus->id));
        }

        Notification::send($user_syllabus, new SyllabusApprove($syllabus));

        toast('Syllabus Approved Successfully', 'success');
        return redirect()->route('learning-syllabus.request-syllabus.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function reject($id, JobFamily $jobFamily)
    {
        $this->authorize('learning_syllabus_approve');
        $syllabus = Syllabus::findOrFail($id);
        $user_syllabus = User::where('nik', $syllabus->created_by)->first();
        $request_syllabus = RequestSyllabus::where('syllabus_id', $syllabus->id)->first();
        if ($syllabus->job_family_id != $jobFamily->id) {
            abort(404);
        }
        $syllabus->update([
            'syllabus_code' => "$jobFamily->job_family_code.9999",
            'number' => 9999,
            'status_id' => '4',
        ]);

        toast('Syllabus Rejected Successfully', 'success');

        if ($request_syllabus) {
            $request_syllabus->update([
                'status_id' => 5
            ]);
            $user = User::where('id', $request_syllabus->created_by)->first();

            Notification::send($user, new ALDRequestSyllabusReject($request_syllabus->id));
        }

        Notification::send($user_syllabus, new SyllabusReject($syllabus));
        return redirect()->route('learning-syllabus.request-syllabus.index');
    }
}
