<?php

namespace App\Http\Controllers\MasterData;

use App\Http\Controllers\Controller;
use App\Models\SyllabusStatus;
use App\Models\OrganizationUnit;
use DataTables;
use DB;
use Illuminate\Http\Request;

class OrganizationUnitSyllabusController extends Controller
{
    public function index(OrganizationUnit $organizationUnit)
    {
        $this->authorize('master_data_syllabus_access');

        $status_syllabuses = SyllabusStatus::all('id', 'name');

        return view('MasterData.OrganizationUnit.Syllabus.index', compact('organizationUnit', 'status_syllabuses'));
    }

    public function show($id)
    {
        
    }

    public function getAjaxOrganizationUnitSyllabuses($id)
    {
        $this->authorize('master_data_syllabus_access');

        $organizationUnit = OrganizationUnit::findOrFail($id);
        
        $model = DB::table('organization_unit_syllabus')
        ->join('organization_units', 'organization_unit_syllabus.organization_id', '=', 'organization_units.organization_id')
        ->join('syllabuses', 'organization_unit_syllabus.syllabus_id', '=', 'syllabuses.id')
        ->join('syllabuses_statuses', 'syllabuses.status_id', '=', 'syllabuses_statuses.id')
        ->where('organization_unit_syllabus.organization_id', $organizationUnit->organization_id)
        ->where('syllabuses.deleted_at', null)
        ->orderBy('syllabuses.training_name', 'asc')
        ->select(['syllabuses.id as syllabus_id',
        'syllabuses.syllabus_code', 'syllabuses.training_name',
        'syllabuses_statuses.name as status_name',
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
