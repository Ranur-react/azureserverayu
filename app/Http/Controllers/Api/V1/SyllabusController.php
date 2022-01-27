<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use App\Models\Syllabus;
use Auth;

class SyllabusController extends Controller
{
    public function show($id)
    {
        $syllabus = Syllabus::findOrFail($id);

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
