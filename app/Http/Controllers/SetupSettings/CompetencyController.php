<?php

namespace App\Http\Controllers\SetupSettings;

use App\Http\Controllers\Controller;
use App\Models\Competency;
use App\Models\JobFamily;
use Illuminate\Http\Request;
use App\Http\Requests\LearningAdmin\Store\StoreCompetencyRequest;
use App\Http\Requests\LearningAdmin\Update\UpdateCompetencyRequest;
use App\Models\PrfCompetencyCatalog;
use DataTables;
use Auth;

class CompetencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('competency_access');

        $competency_types = PrfCompetencyCatalog::all()->pluck('type')->unique();
        return view('SetupSettings.Competency.index', compact('competency_types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('competency_create');

        return view('SetupSettings.Competency.New.Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompetencyRequest $request)
    {
         PrfCompetencyCatalog::create([
             'name' => $request->name,
             'type' => $request->type,
             'definition' => $request->definition,
             'definition_english' => $request->definition_english,
             'status' => 1,
         ]);

        // if (is_null($request->sub_job_family)) {
        //     $competency_id = Competency::create([
        //         'name' => $request->name,
        //         'description' => $request->description,
        //         'is_general_knowledge' => $request->is_general_knowledge,
        //         'job_family_id' => $request->job_family
        //     ]);
        // }
        // if (!is_null($request->sub_job_family)) {
        //     $competency_id = Competency::create([
        //         'name' => $request->name,
        //         'description' => $request->description,
        //         'is_general_knowledge' => $request->is_general_knowledge,
        //         'job_family_id' => $request->sub_job_family
        //     ]);
        // }

        toast('Competency Successfully Created', 'success');

        return redirect()->route('setup-settings.competencies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->authorize('competency_show');

        $prfCompetencyCatalog = PrfCompetencyCatalog::findOrFail($id);
        return view('SetupSettings.Competency.New.show', compact('prfCompetencyCatalog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('competency_edit');

        $prfCompetencyCatalog = PrfCompetencyCatalog::findOrFail($id);
        // $jobFamilies = JobFamily::with('jobFamilySubJobFamily')->where('level', 0)->get();
        return view('SetupSettings.Competency.New.edit', compact('prfCompetencyCatalog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCompetencyRequest $request, $id)
    {

        $prfCompetencyCatalog = PrfCompetencyCatalog::findOrFail($id);

        $prfCompetencyCatalog->update($request->validated());

        // if (is_null($request->sub_job_family)) {
        //     $competency->update([
        //         'name' => $request->name,
        //         'description' => $request->description,
        //         'is_general_knowledge' => $request->is_general_knowledge,
        //         'job_family_id' => $request->job_family
        //     ]);
        // }
        // if (!is_null($request->sub_job_family)) {
        //     $competency->update([
        //         'name' => $request->name,
        //         'description' => $request->description,
        //         'is_general_knowledge' => $request->is_general_knowledge,
        //         'job_family_id' => $request->sub_job_family
        //     ]);
        // }

        toast('Competency Successfully Updated', 'success');

        return redirect()->route('setup-settings.competencies.edit', $prfCompetencyCatalog);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('competency_delete');

        $prfCompetencyCatalog = PrfCompetencyCatalog::findOrFail($id);

        $prfCompetencyCatalog->delete();

        toast('Competency Successfully Deleted', 'success');

        return redirect()->back();
    }

    public function getAjaxCompetencies()
    {
        $this->authorize('competency_access');

        $model = PrfCompetencyCatalog::query();

        return Datatables::of($model)
            ->addColumn('status_id', static function ($model) {
                if ($model->status == 0) {
                    return '<span class="badge badge-pill badge-muted">Deactive</span>';
                }
                if ($model->status == 1) {
                    return '<span class="badge badge-pill badge-success">Active</span>';
                }
            })->editColumn('name', function ($model) {
                if (Auth::user()->can('competency_syllabus_access')) {
                    return '
                    <a href="' . route('setup-settings.competencies.syllabuses.index', $model->id) . '">
                        <div>
                        ' . $model->name . '
                        </div>
                    </a>';
                } else {
                    return '
                    <div>
                    ' . $model->name . '
                    </div>';
                }
            })->editColumn('action', static function ($model) {
                return view('SetupSettings.Competency.Datatable.action', compact('model'));
            })->rawColumns(['name', 'status_id', 'action'])
            ->toJson();
    }
}
