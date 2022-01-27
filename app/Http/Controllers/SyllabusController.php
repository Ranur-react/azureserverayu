<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Syllabus;
use Auth;
use Illuminate\Http\Request;

class SyllabusController extends Controller
{
    public function show($id)
    {
        // $users = Employee::where('nik_atasan', Auth::user()->employee->nik)->count();
        $syllabus = Syllabus::findOrFail($id);

        // if ($users == 0 ){
        //     abort(404);
        // }
        // if($syllabus->status_id != 1)
        // {
        //     abort(404);
        // }

        $array['syllabus'] = json_decode($syllabus, true);
        $array['competencies'] = json_decode($syllabus->prfCompetencyCatalog, true);
        $array['vendors'] = json_decode($syllabus->vendorsSyllabuses, true);
        $array['levels'] = json_decode($syllabus->levelsSyllabuses, true);
        $array['statuses'] = json_decode($syllabus->statusesSyllabuses, true);
        $array['locations'] = json_decode($syllabus->locationsSyllabuses, true);
        $array['units'] = json_decode($syllabus->unitsSyllabuses, true);

        return json_encode($array);
    }
}
