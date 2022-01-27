<?php

namespace App\Http\Controllers\MasterData;

use App\Http\Controllers\Controller;
use App\Models\Status;
use App\Models\SyllabusStatus;
use DB;
use DataTables;
use Illuminate\Http\Request;

class StatusSyllabusController extends Controller
{
    public function index(Status $status)
    {
        $this->authorize('master_data_syllabus_access');

        $status_syllabuses = SyllabusStatus::all('id', 'name');

        return view('MasterData.Status.Syllabus.index', compact('status', 'status_syllabuses'));
    }

    public function getAjaxStatusSyllabuses(Status $status)
    {
        $this->authorize('master_data_syllabus_access');
        
        $model = DB::table('status_syllabus')
        ->join('statuses', 'status_syllabus.status_id', '=', 'statuses.id')
        ->join('syllabuses', 'status_syllabus.syllabus_id', '=', 'syllabuses.id')
        ->join('syllabuses_statuses', 'syllabuses.status_id', '=', 'syllabuses_statuses.id')
        ->where('status_syllabus.status_id', $status->id)
        ->where('syllabuses.deleted_at', NULL)
        ->orderBy('syllabuses.training_name', 'asc')
        ->select(['syllabuses.id as syllabus_id', 'syllabuses.syllabus_code', 'syllabuses.training_name',
        'syllabuses_statuses.name as syllabus_status_name',
        'syllabuses_statuses.id as syllabus_status_id']);

        return Datatables::of($model)
            ->editColumn('syllabus_status_name', static function ($model) {
                if($model->syllabus_status_id == 3){
                    return '<span class="badge badge-pill badge-warning">'.$model->syllabus_status_name.'</span>';
                }
                if($model->syllabus_status_id == 1){
                    return '<span class="badge badge-pill badge-success">'.$model->syllabus_status_name.'</span>';
                }if($model->syllabus_status_id == 2){
                    return '<span class="badge badge-pill badge-muted">'.$model->syllabus_status_name.'</span>';
                } if($model->syllabus_status_id == 4){
                    return '<span class="badge badge-pill badge-danger">'.$model->syllabus_status_name.'</span>';
                }   
            })
            ->editColumn('training_name', function ($model) {
                return '<a href="'.route('api.v1.syllabuses-ajax.show', $model->syllabus_id).'" class="pe-auto modal-global">'.$model->training_name.'</a>';
            })->rawColumns(['training_name', 'syllabus_status_name'])
            ->toJson();
    }
}
