<?php

namespace App\Http\Controllers\Curriculum;

use App\Http\Controllers\Controller;
use App\Models\Curriculum;
use App\Models\SyllabusStatus;
use DataTables;
use DB;
use Illuminate\Http\Request;

class CurriculumSyllabusController extends Controller
{

    public function index(Curriculum $curriculum)
    {
        $this->authorize('curriculum_access');

        $status_syllabuses = SyllabusStatus::all('id', 'name');

        return view('Curriculum.Syllabus.index', compact('curriculum', 'status_syllabuses'));
    }
    public function getAjaxCurriculumSyllabuses(Curriculum $curriculum)
    {
        $this->authorize('master_data_syllabus_access');
        
        $model = DB::table('curriculum_syllabus')
        ->join('curriculum', 'curriculum_syllabus.curriculum_id', '=', 'curriculum.id')
        ->join('syllabuses', 'curriculum_syllabus.syllabus_id', '=', 'syllabuses.id')
        ->join('syllabuses_statuses', 'syllabuses.status_id', '=', 'syllabuses_statuses.id')
        ->where('curriculum_id', $curriculum->id)
        ->where('syllabuses.deleted_at', null)
        ->orderBy('syllabuses.training_name', 'asc')
        ->select(['syllabuses.id as syllabus_id', 'syllabuses.syllabus_code', 'syllabuses.training_name','syllabuses_statuses.name as status_name',
        'syllabuses_statuses.id as status_id']);

        return DataTables::of($model)
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
