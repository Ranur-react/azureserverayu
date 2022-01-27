<?php

namespace App\Http\Controllers\LearningNeedAnalysis\Hcbp;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Hcbp;
use Auth;
use Illuminate\Http\Request;

class UserNeedController extends Controller
{
    public function index()
    {
        $hcbp_count = Hcbp::where('nik', Auth::user()->employee->nik)->count();

        abort_if($hcbp_count == 0 , 404);

        $hcbp = Hcbp::where('nik', Auth::user()->employee->nik)->get();

        $employees = Employee::query();

        foreach($hcbp as $row)
        {
            $employees = $employees->orwhere([
                ['admins', $row->region],
                ['area_group', $row->area],
                ['directorate', $row->directorate],
            ]);
        }

        $employees = $employees->get();
        
        return view('LearningNeedAnalysis.UserNeeds.Hcbp.index', 
        compact('employees'));
    }
}
