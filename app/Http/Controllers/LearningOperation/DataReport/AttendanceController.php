<?php

namespace App\Http\Controllers\LearningOperation\DataReport;

use App\Http\Controllers\Controller;
use App\Http\Requests\LearningAdmin\Store\StoreExcelFileRequest;
use App\Imports\AttendanceClassImport;
use App\Models\Attendance;
use App\Models\Enrollment;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class AttendanceController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!isset($request->enrollattend_ids)) {
            $request->merge(['enrollattend_ids' => []]);
        }
        foreach ($request->enroll_ids as $enroll_id) {
            Attendance::updateOrCreate(
                [
                    'enrollment_id' => $enroll_id,
                    'section_id' => request('section'),
                ],
                [
                    'attendance' => in_array($enroll_id, $request->enrollattend_ids) ? true : false
                ]
            );
        }

        toast('Successfully Mark Attendance', 'success');

        return redirect()->route('data-report.class.showClass', request('id_class'));
    }


    public function import(StoreExcelFileRequest $request)
    {
        Excel::import(new AttendanceClassImport(), $request->file('file'));

        toast('Successfully Mark Attendance', 'success');

        return redirect()->back();
    }
}
