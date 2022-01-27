<?php

namespace App\Http\Controllers\LearningDesign\LearningNeedAnalysis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IdpPoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
            )->whereDate('idp_period.start_date', '<=', today())
            ->whereDate('idp_period.end_date', '>=', today())
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
            )->whereDate('idp_period.start_date', '<=', today())
            ->whereDate('idp_period.end_date', '>=', today())
            ->where('idp_syllabus.priority', 1)
            ->groupBy('syllabus_id')
            ->orderBy('count', 'desc')
            ->get();


        return view('LearningDesign.LearningNeedAnalysis.IDPPool.index', compact('data', 'data_priority1'));
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
}
