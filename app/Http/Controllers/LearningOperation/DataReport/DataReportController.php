<?php

namespace App\Http\Controllers\LearningOperation\DataReport;

use App\Exports\DataReportExport;
use App\Http\Controllers\Controller;
use App\Models\Attendance;
use App\Models\ClassSection;
use App\Models\Elearning;
use App\Models\Enrollment;
use App\Models\TrainingClass;
use App\Models\User;
use DB;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Spatie\Browsershot\Browsershot;

class DataReportController extends Controller
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
        return view('DataReport.index', compact('elearnings', 'trainingclasses'));
    }

    // Elearning
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showElearning($elearning_id)
    {
        $training = Elearning::findOrFail($elearning_id);

        $users = User::join('enrollments', 'users.id', '=', 'enrollments.user_id')->leftJoin('elearning_test_score', 'elearning_test_score.enrollment_id', '=', 'enrollments.id')->selectRaw('users.nik, users.id, users.name, users.title, users.organization, enrollments.class_id, enrollments.id as enroll_id, score_pretest, score_posttest')->where('elearning_id', '=', $elearning_id)->get();

        $type = 'elearning';

        return view('DataReport.showElearning', compact('training', 'users', 'type'));
    }

    // Class
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showClass($class_id)
    {
        $training = TrainingClass::findOrFail($class_id);

        $type = 'class';

        $users = Attendance::join('enrollments', 'class_attendance.enrollment_id', '=', 'enrollments.id')->where('enrollments.class_id', '=', $class_id)->join('class_sections', 'class_attendance.section_id', '=', 'class_sections.id')->join('users', 'users.id', '=', 'enrollments.user_id')->selectRaw('users.nik, users.id, users.name, users.title, users.organization, enrollments.class_id, enrollments.id as enroll_id, SUM(case when attendance = true then 1 else 0 end) as count_attend,enrollment_id')->groupBy('enrollment_id')->get();

        $sessions = ClassSection::where('class_id', '=', $class_id)->get();

        $count_sessions = ClassSection::where('class_id', '=', $class_id)->count('id');

        return view('DataReport.showClass', compact('training', 'users', 'type', 'sessions', 'count_sessions'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showSession($class_id, $section)
    {
        $training = TrainingClass::findOrFail($class_id);
        $session = ClassSection::where('class_id', '=', $class_id)->where('section', '=', $section)->first();

        $users = User::join('enrollments', 'users.id', '=', 'enrollments.user_id')->where('class_id', '=', $class_id)->selectRaw('users.nik, users.id, users.name, users.title, users.organization, enrollments.class_id, enrollments.id as enrollment_id')->get();

        $raw_attendances = Attendance::where('section_id', '=', $session->id)->where('attendance', '=', true)->select('enrollment_id')->get();

        $attendances = [];
        foreach ($raw_attendances as $attendance) {
            $attendances[] = $attendance->enrollment_id;
        }

        return view('DataReport.showSession', compact('training', 'session', 'users', 'attendances'));
    }

    public function export($type, $id)
    {
        if ($type == 'class') {
            $name = TrainingClass::findOrFail($id)->name;
        } else {
            $name = Elearning::findOrFail($id)->name;
        }

        return Excel::download(new DataReportExport($id, $type, $name), 'Data Report - ' . $name . '.xlsx');
    }
}
