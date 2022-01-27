<?php

namespace App\Http\Controllers\MasterData;

use App\Http\Controllers\Controller;
use App\Models\Level;
use App\Models\SyllabusStatus;
use DB;
use DataTables;
use Illuminate\Http\Request;

class LevelSyllabusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Level $level)
    {
        $this->authorize('master_data_syllabus_access');

        $status_syllabuses = SyllabusStatus::all('id', 'name');

        return view('MasterData.Level.Syllabus.index', compact('level', 'status_syllabuses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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

    public function getAjaxLevelSyllabuses(Level $level)
    {
        $this->authorize('master_data_syllabus_access');
        
        $model = DB::table('level_syllabus')
        ->join('levels', 'level_syllabus.level_id', '=', 'levels.id')
        ->join('syllabuses', 'level_syllabus.syllabus_id', '=', 'syllabuses.id')
        ->join('syllabuses_statuses', 'syllabuses.status_id', '=', 'syllabuses_statuses.id')
        ->where('level_id', $level->id)
        ->where('syllabuses.deleted_at', null)
        ->orderBy('syllabuses.training_name', 'asc')
        ->select(['syllabuses.id as syllabus_id', 'syllabuses.syllabus_code', 'syllabuses.training_name','syllabuses_statuses.name as status_name',
        'syllabuses_statuses.id as status_id']);

        return Datatables::of($model)
            ->editColumn('status_name', static function ($model) {
                if ($model->status_id == 3) {
                    return '<span class="badge badge-pill badge-warning">'.$model->status_name.'</span>';
                }
                if ($model->status_id == 1) {
                    return '<span class="badge badge-pill badge-success">'.$model->status_name.'</span>';
                }if ($model->status_id == 2) {
                    return '<span class="badge badge-pill badge-muted">'.$model->status_name.'</span>';
                } if ($model->status_id == 4) {
                    return '<span class="badge badge-pill badge-danger">'.$model->status_name.'</span>';
                }
            })
            ->editColumn('training_name', function ($model) {
                return '<a href="'.route('api.v1.syllabuses-ajax.show', $model->syllabus_id).'" class="pe-auto modal-global">'.$model->training_name.'</a>';
            })->rawColumns(['training_name', 'status_name'])
            ->toJson();
    }
}
