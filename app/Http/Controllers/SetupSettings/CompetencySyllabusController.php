<?php

namespace App\Http\Controllers\SetupSettings;

use App\Http\Controllers\Controller;
use App\Models\Competency;
use App\Models\PrfCompetencyCatalog;
use App\Models\Syllabus;
use App\Models\SyllabusStatus;
use DB;
use DataTables;
use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;

class CompetencySyllabusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $this->authorize('vendor_syllabus_access');

        $prfCompetencyCatalog = PrfCompetencyCatalog::findOrFail($id);

        $status_syllabuses = SyllabusStatus::all('id', 'name');

        return view('SetupSettings.Competency.Syllabus.index', compact('prfCompetencyCatalog', 'status_syllabuses'));
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
    public function show(PrfCompetencyCatalog $prfCompetencyCatalog, Syllabus $syllabus)
    {
        if (! $prfCompetencyCatalog->syllabuses->where('id', '=', $syllabus->id)->first()) {
            abort(404);
        }

        $activities  = Activity::with('causer')->where('subject_type', 'App\Models\Syllabus')
            ->where('subject_id', $syllabus->id)
            ->get();

        return view('Setup.Competency.Syllabus.show', compact('competency', 'syllabus', 'activities'));
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

    public function getAjaxCompetencySyllabuses($id)
    {
        $this->authorize('vendor_syllabus_access');

        $prfCompetencyCatalog = PrfCompetencyCatalog::findOrFail($id);
        $model = DB::table('prf_competency_syllabus')
        ->join('prf_competency_catalog', 'prf_competency_syllabus.prf_competency_catalog_id', '=', 'prf_competency_catalog.id')
        ->join('syllabuses', 'prf_competency_syllabus.syllabus_id', '=', 'syllabuses.id')
        ->join('syllabuses_statuses', 'syllabuses.status_id', '=', 'syllabuses_statuses.id')
        ->where('prf_competency_catalog_id', $prfCompetencyCatalog->id)
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
