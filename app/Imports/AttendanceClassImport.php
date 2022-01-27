<?php

namespace App\Imports;

use App\Models\Attendance;
use App\Models\Enrollment;
use DB;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AttendanceClassImport implements ToCollection, WithHeadingRow
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $rows)
    {

        $user_attend_ids = [];
        foreach ($rows as $row) {
            if ($row['attendance']) {
                $user_attend_ids[] = $row['nik'];
            }
        }


        $enrolled_users = Enrollment::where('class_id', '=', request('id'))->join('users', 'enrollments.user_id', '=', 'users.id')->select('enrollments.id', 'user_id', 'nik')->get();

        // dd($enrolled_users);
        foreach ($enrolled_users as $user) {
            Attendance::updateOrCreate(
                [
                    'enrollment_id' => $user->id,
                    'section_id' => request('section'),
                ],
                [
                    'attendance' => in_array($user->nik, $user_attend_ids) ? true : false
                ]
            );
        }
    }
}
