<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class IdpController extends Controller
{
    public function show(Request $request)
    {
        $query = DB::table('idp_syllabus')->join('idp', 'idp_syllabus.idp_id', '=', 'idp.id')
            ->join('users', 'idp.user_id', '=', 'users.id')
            ->join('idp_period', 'idp.idp_period_id', '=', 'idp_period.id')
            ->where('syllabus_id', $request->id)
            ->whereDate('idp_period.start_date', '<=', today())
            ->whereDate('idp_period.end_date', '>=', today())
            ->orderBy('idp_syllabus.priority', 'asc')
            ->select(['idp_syllabus.idp_id', 'idp_syllabus.priority','idp_period.name As period_name', 'idp_period.start_date',
                'users.nik', 'users.name', 'users.title', 'users.organization']);

        return Datatables::of($query)
            ->toJson();
    }

    public function showIdp(Request $request)
    {
        $query = DB::table('idp_syllabus')->join('idp', 'idp_syllabus.idp_id', '=', 'idp.id')
            ->join('users', 'idp.user_id', '=', 'users.id')
            ->join('idp_period', 'idp.idp_period_id', '=', 'idp_period.id')
            ->where('syllabus_id', $request->id)
            ->where('idp_period.id', $request->idp)
            ->orderBy('idp_syllabus.priority', 'asc')
            ->select(['idp_syllabus.idp_id', 'idp_syllabus.priority','idp_period.name As period_name', 'idp_period.start_date',
                'users.nik', 'users.name', 'users.title', 'users.organization']);

        return Datatables::of($query)
            ->toJson();
    }

    public function showIdp1(Request $request)
    {
        $query = DB::table('idp_syllabus')->join('idp', 'idp_syllabus.idp_id', '=', 'idp.id')
            ->join('users', 'idp.user_id', '=', 'users.id')
            ->join('idp_period', 'idp.idp_period_id', '=', 'idp_period.id')
            ->where('syllabus_id', $request->id)
            ->where('idp_period.id', $request->idp)
            ->whereDate('idp_period.start_date', '<=', today())
            ->whereDate('idp_period.end_date', '>=', today())
            ->where('idp_syllabus.priority', 1)
            ->orderBy('users.name', 'asc')
            ->select(['idp_syllabus.idp_id', 'idp_syllabus.priority','idp_period.name As period_name', 'idp_period.start_date',
                'users.nik', 'users.name', 'users.title', 'users.organization']);

        return Datatables::of($query)
            ->toJson();
    }

    public function showIdpPriority(Request $request)
    {
        $query = DB::table('idp_syllabus')->join('idp', 'idp_syllabus.idp_id', '=', 'idp.id')
            ->join('users', 'idp.user_id', '=', 'users.id')
            ->join('idp_period', 'idp.idp_period_id', '=', 'idp_period.id')
            ->where('syllabus_id', $request->id)
            // ->whereDate('idp_period.start_date', '<=', today())
            // ->whereDate('idp_period.end_date', '>=', today())
            ->where('idp_syllabus.priority', 1)
            ->orderBy('idp_syllabus.priority', 'asc')
            ->select(['idp_syllabus.idp_id', 'idp_syllabus.priority','idp_period.name As period_name', 'idp_period.start_date',
                'users.nik', 'users.name', 'users.title', 'users.organization']);

        return Datatables::of($query)
            ->toJson();
    }
}
