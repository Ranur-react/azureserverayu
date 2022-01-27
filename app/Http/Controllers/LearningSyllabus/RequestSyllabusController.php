<?php

namespace App\Http\Controllers\LearningSyllabus;

use App\Http\Controllers\Controller;
use App\Models\Syllabus;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DataTables;

class RequestSyllabusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('learning_syllabus_approve');

        return view('LearningSyllabus.RequestSyllabus.index');
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

    public function getPendingSyllabus()
    {
        $model = Syllabus::with('syllabusJobFamily', 'syllabusStatus')
        ->where('status_id', 3)->latest()->select('syllabuses.*');

        return Datatables::of($model)
            ->editColumn('job_family_name', static function ($model) {
                return $model->syllabusJobFamily->name;
            })
            ->editColumn('level_description', static function ($model) {
                return $model->syllabusJobFamily->level_description;
            })
            ->editColumn('action', static function ($model) {
                return '<a href="'.route('learning-syllabus.request-syllabus.job-families.edit', [$model->id, $model->syllabusJobFamily->id]).'" class="btn btn-sm btn-primary"
                type="button">View</a>';
            })->editColumn('created_at', static function ($model) {
                return Carbon::parse($model->created_at)->format('d F Y');
            })
            ->rawColumns(['action'])
            ->toJson();
    }
}
