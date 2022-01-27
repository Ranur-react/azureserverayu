<?php

namespace App\Http\Controllers\LearningNeedAnalysis;

use App\Http\Controllers\Controller;
use App\Models\Idp;
use App\Models\IdpPeriod;
use App\Models\Syllabus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DataTables;

class IdpPeriodSyllabusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(IdpPeriod $idpPeriod)
    {
        $this->authorize('idp_period_access');
        $data = DB::table('idp_syllabus')
            ->join('idp', 'idp_syllabus.idp_id', '=', 'idp.id')
            ->join('syllabuses', 'idp_syllabus.syllabus_id', '=', 'syllabuses.id')
            ->join('idp_period', 'idp.idp_period_id', '=', 'idp_period.id')
            ->select(
                'idp_syllabus.*',
                DB::raw('COUNT(syllabus_id) as count'),
                'syllabuses.syllabus_code',
                'syllabuses.training_name',
                'idp_period.start_date',
            )->where('idp_period.id', '=', $idpPeriod->id)
            ->groupBy('syllabus_id')
            ->orderBy('count', 'desc')
            ->get();

        $data_priority1 = DB::table('idp_syllabus')
            ->join('idp', 'idp_syllabus.idp_id', '=', 'idp.id')
            ->join('syllabuses', 'idp_syllabus.syllabus_id', '=', 'syllabuses.id')
            ->join('idp_period', 'idp.idp_period_id', '=', 'idp_period.id')
            ->select(
                'idp_syllabus.*',
                DB::raw('COUNT(syllabus_id) as count'),
                'syllabuses.syllabus_code',
                'syllabuses.training_name',
                'idp_period.start_date',
            )->where('idp_period.id', '=', $idpPeriod->id)
            ->where('idp_syllabus.priority', '=', 1)
            ->groupBy('syllabus_id')
            ->orderBy('count', 'desc')
            ->get();

        return view('LearningNeedAnalysis.IDPPeriod.Syllabus.index', compact('data','idpPeriod', 'data_priority1'));
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
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

    public function getIdpEmployee(IdpPeriod $idpPeriod, Syllabus $syllabus)
    {
        $this->authorize('idp_period_access');
        
        $query = DB::table('idp_syllabus')
        ->join('idp', 'idp_syllabus.idp_id', '=', 'idp.id')
            ->join('employee', 'idp.nik', '=', 'employee.nik')
            ->join('idp_period', 'idp.idp_period_id', '=', 'idp_period.id')
            ->where('syllabus_id', $syllabus->id)
            ->where('idp_period.id', $idpPeriod->id)
            ->orderBy('idp_syllabus.priority', 'asc')
            ->select(['idp_syllabus.idp_id', 'idp_syllabus.priority','idp_period.name As period_name', 'idp_period.start_date',
                'employee.nik', 'employee.name', 'employee.title', 'employee.organization']);

        return Datatables::of($query)
            ->toJson();
    }

    public function getIdpEmployeePriority1(IdpPeriod $idpPeriod, Syllabus $syllabus)
    {

        $this->authorize('idp_period_access');
        
        $query = DB::table('idp_syllabus')
        ->join('idp', 'idp_syllabus.idp_id', '=', 'idp.id')
            ->join('employee', 'idp.nik', '=', 'employee.nik')
            ->join('idp_period', 'idp.idp_period_id', '=', 'idp_period.id')
            ->where('syllabus_id', $syllabus->id)
            ->where('idp_syllabus.priority', 1)
            ->where('idp_period.id', $idpPeriod->id)
            ->orderBy('idp_syllabus.priority', 'asc')
            ->select(['idp_syllabus.idp_id', 'idp_syllabus.priority','idp_period.name As period_name', 'idp_period.start_date',
                'employee.nik', 'employee.name', 'employee.title', 'employee.organization']);

        return Datatables::of($query)
            ->toJson();
    }
}
