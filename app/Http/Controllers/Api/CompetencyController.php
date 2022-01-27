<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Competency;
use Illuminate\Http\Request;
use DataTables;

class CompetencyController extends Controller
{
    public function index()
    {
        $model = Competency::query();

        return Datatables::of($model)
            ->addColumn('status_id', static function ($model) {
                if($model->status == 0){
                    return '<span class="badge badge-pill badge-warning">Pending</span>';
                }
                if($model->status == 1){
                    return '<span class="badge badge-pill badge-success">Active</span>';
                }  
            })->editColumn('training_name', function ($model) {
                return '
                <a href="'.route('learning-design.learning-syllabus.job-families.syllabuses.show', [$model->syllabusJobFamily->id, $model->id]).'">
                <div class="text-wrap" style="width: 27rem;">
                '.$model->training_name.'
                </div>
                </a>';
            })->editColumn('action', static function ($model) {
                return view('LearningDesign.LearningSyllabus.SubJobFamily.Ajax.index', compact('model'));
            })->rawColumns(['training_name', 'status_id', 'action'])
            ->toJson();
    }
}
