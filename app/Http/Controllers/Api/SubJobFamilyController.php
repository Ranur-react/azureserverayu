<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\JobFamily;
use Illuminate\Http\Request;

class SubJobFamilyController extends Controller
{
    public function index()
    {
        $sub_job_families = JobFamily::whereHas('subJobFamilyJobFamily', function ($query) {
            $query->whereId(request()->input('job_family_id', 0));
        })->pluck('name', 'id');

        return response()->json($sub_job_families);
    }
}
