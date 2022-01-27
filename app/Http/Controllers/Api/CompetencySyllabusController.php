<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class CompetencySyllabusController extends Controller
{
    public function show($id)
    {
        $model = DB::table('competency_syllabus')
        ->join('competencies', 'competency_syllabus.competency_id', '=', 'competencies.id')
        ->join('syllabuses', 'competency_syllabus.syllabus_id', '=', 'syllabuses.id')
        ->join('syllabuses_statuses', 'syllabuses.status_id', '=', 'syllabuses_statuses.id')
        ->where('competency_id', $id)
        ->where('syllabuses.deleted_at', NULL)
        ->orderBy('syllabuses.training_name', 'asc')
        ->select(['syllabuses.id as syllabus_id', 'syllabuses.syllabus_code', 'syllabuses.training_name','syllabuses_statuses.name as status_name',
        'syllabuses_statuses.id as status_id']);

        return Datatables::of($model)
            ->editColumn('status_name', static function ($model) {
                if($model->status_id == 3){
                    return '<span class="badge badge-pill badge-warning">'.$model->status_name.'</span>';
                }
                if($model->status_id == 1){
                    return '<span class="badge badge-pill badge-success">'.$model->status_name.'</span>';
                }if($model->status_id == 2){
                    return '<span class="badge badge-pill badge-muted">'.$model->status_name.'</span>';
                } if($model->status_id == 4){
                    return '<span class="badge badge-pill badge-danger">'.$model->status_name.'</span>';
                }   
            })
            ->editColumn('training_name', function ($model) {
                return '<a href="'.route('api.syllabuses.show', $model->syllabus_id).'" class="pe-auto modal-global">'.$model->training_name.'</a>';
            })->rawColumns(['training_name', 'status_name'])
            ->toJson();
    }
}
