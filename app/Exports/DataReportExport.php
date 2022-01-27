<?php

namespace App\Exports;

use App\Models\Attendance;
use App\Models\ClassSection;
use App\Models\DataReport;
use App\Models\Elearning;
use App\Models\Enrollment;
use App\Models\User;
use DB;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class DataReportExport implements FromView
{
    public function __construct(int $id, $type, $name)
    {
        $this->id = $id;
        $this->type = $type;
        $this->name = $name;
    }

    public function view(): View
    {
        if ($this->type == 'elearning') {
            $users = User::join('enrollments', 'users.id', '=', 'enrollments.user_id')->leftJoin('elearning_test_score', 'elearning_test_score.enrollment_id', '=', 'enrollments.id')->selectRaw('users.nik, users.id, users.name, users.title, users.organization, enrollments.class_id, enrollments.id as enroll_id, score_pretest, score_posttest')->where('elearning_id', '=', $this->id)->get();
            return view('DataReport.export', [
                'users' => $users,
                'name' => $this->name,
                'type' => $this->type
            ]);
        } else {
            $users = Attendance::join('enrollments', 'class_attendance.enrollment_id', '=', 'enrollments.id')->where('enrollments.class_id', '=', $this->id)->join('class_sections', 'class_attendance.section_id', '=', 'class_sections.id')->join('users', 'users.id', '=', 'enrollments.user_id')->selectRaw('users.nik, users.id, users.name, users.title, users.organization, enrollments.class_id, enrollments.id as enroll_id, SUM(case when attendance = true then 1 else 0 end) as count_attend,enrollment_id')->groupBy('enrollment_id')->get();

            $count_sessions = ClassSection::where('class_id', '=', $this->id)->count('id');

            return view('DataReport.export', [
                'users' => $users,
                'count_sessions' => $count_sessions,
                'name' => $this->name,
                'type' => $this->type
            ]);
        }
    }
}
