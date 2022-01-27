<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class LevelSyllabusController extends Controller
{
    public function show($id)
    {
        $model = DB::table('level_syllabus')
        ->join('levels', 'level_syllabus.level_id', '=', 'levels.id')
        ->join('syllabuses', 'level_syllabus.syllabus_id', '=', 'syllabuses.id')
        ->join('syllabuses_statuses', 'syllabuses.status_id', '=', 'syllabuses_statuses.id')
        ->where('level_id', $id)
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
