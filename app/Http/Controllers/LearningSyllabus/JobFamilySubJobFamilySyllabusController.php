<?php

namespace App\Http\Controllers\LearningSyllabus;

use App\Http\Controllers\Controller;
use App\Http\Requests\LearningAdmin\Update\UpdateSyllabusRequest;
use App\Models\Competency;
use App\Models\JobFamily;
use App\Models\MasterData;
use App\Models\SubJobFamily;
use App\Models\Syllabus;
use App\Http\Requests\LearningAdmin\Store\StoreSyllabusRequest;
use App\Models\SyllabusStatus;
use App\Models\Vendor;
use App\Models\Level;
use App\Models\Location;
use App\Models\PrfCompetencyCatalog;
use App\Models\Status;
use App\Models\OrganizationUnit;
use App\Models\User;
use App\Notifications\SyllabusCreate;
use App\Services\SyllabusService;
use Auth;
use Barryvdh\DomPDF\Facade as PDF;
use Spatie\Activitylog\Models\Activity;
use Illuminate\Http\Request;
use Notification;
use DataTables;
use DB;

class JobFamilySubJobFamilySyllabusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index(JobFamily $jobFamily, JobFamily $subJobFamily)
    {
        if ($subJobFamily->parent_id != $jobFamily->id) {
            abort(404);
        }

        $syllabuseStatuses = SyllabusStatus::all('id', 'name');

        return view('LearningSyllabus.SubJobFamily.Syllabus.index', compact('jobFamily', 'subJobFamily', 'syllabuseStatuses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function create(JobFamily $jobFamily, JobFamily $subJobFamily)
    {
        $this->authorize('learning_syllabus_create');

        if ($subJobFamily->parent_id != $jobFamily->id) {
            abort(404);
        }
        
        // $competencies = PrfCompetencyCatalog::where('status', 1)->orderBy('name')->get(['id', 'name']);
        // $vendors = Vendor::all('id', 'partner_name')->sortBy('partner_name');
        $levels = Level::all('id', 'name')->sortBy('name');
        $statuses = Status::all('id', 'name')->sortBy('name');
        // $units = OrganizationUnit::all('id', 'name')->sortBy('name');
        // $locations = Location::all('id', 'name')->sortBy('name');
        return view(
            'LearningSyllabus.SubJobFamily.Syllabus.create',
            compact(
                'jobFamily',
                'subJobFamily',
                'levels',
                'statuses'
            )
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function store(
        StoreSyllabusRequest $request,
        SyllabusService $service,
        JobFamily $jobFamily,
        JobFamily $subJobFamily
    ) {
        $array_levels_name = [];
        $array_statuses_name = [];
        $array_units_name = [];
        $array_locations_name = [];
        $array_competencies_name = [];
        $array_vendors_name = [];

        $levels_select = Level::whereIn('id', $request->levels)->get();
        $statuses_select = Status::whereIn('id', $request->statuses)->get();
        $units_select = OrganizationUnit::whereIn('organization_id', $request->units)->get();
        $locations_select = Location::whereIn('location_id', $request->locations)->get();
        $competencies_select = PrfCompetencyCatalog::whereIn('id', $request->skills_will_you_gain)->get();
        $vendors_select = Vendor::whereIn('id', $request->partner_recommendation)->get();

        foreach ($levels_select as $level_select) {
            $array_levels_name[] = $level_select->name;
        }
        foreach ($statuses_select as $status_select) {
            $array_statuses_name[] = $status_select->name;
        }
        foreach ($units_select as $unit_select) {
            $array_units_name[] = $unit_select->name;
        }
        foreach ($locations_select as $location_select) {
            $array_locations_name[] = $location_select->location_code;
        }
        foreach ($competencies_select as $competency_select) {
            $array_competencies_name[] = $competency_select->name;
        }
        foreach ($vendors_select as $vendor_select) {
            $array_vendors_name[] = $vendor_select->partner_name;
        }

        $syllabus = $service->storeSubJobFamilySyllabus(
            $request->training_name,
            $request->training_summary,
            $request->training_background,
            $request->training_description,
            $array_levels_name,
            $array_statuses_name,
            $array_locations_name,
            $array_units_name,
            $array_competencies_name,
            $request->learning_scope,
            $array_vendors_name,
            $request->levels,
            $request->statuses,
            $request->locations,
            $request->units,
            $request->skills_will_you_gain,
            $request->partner_recommendation,
            $subJobFamily
        );

        toast('Syllabus Successfully Created', 'success');

        $atasan = User::where('nik', Auth::user()->employee->nik_atasan)->first();
        Notification::send($atasan, new SyllabusCreate($syllabus));

        return redirect()->route('learning-syllabus.job-families.sub-job-families.syllabuses.index', [$jobFamily, $subJobFamily]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(JobFamily $jobFamily, JobFamily $subJobFamily, Syllabus $syllabus)
    {
        $this->authorize('learning_syllabus_show');

        if ($subJobFamily->parent_id != $jobFamily->id) {
            abort(404);
        }
        if ($syllabus->job_family_id != $subJobFamily->id) {
            abort(404);
        }

        $activities  = Activity::with('causer.employee')
            ->where('subject_type', 'App\Models\Syllabus')
            ->where('subject_id', $syllabus->id)
            ->get();

        $max_number = $jobFamily->syllabuses()->where('status_id', 1)->max('number') + 1;

        return view(
            'LearningSyllabus.SubJobFamily.Syllabus.newshow',
            compact('jobFamily', 'subJobFamily', 'syllabus', 'activities', 'max_number')
        );
    }

    public function export(JobFamily $jobFamily, SubJobFamily $subJobFamily, Syllabus $syllabus)
    {

        // $pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadview('LearningDesign.LearningSyllabus.Syllabus.Detail.index_pdf', [
        //     'jobFamily' => $jobFamily,
        //     'subJobFamily' => $subJobFamily, 'syllabus' => $syllabus
        // ])->setOptions(['defaultFont' => 'sans-serif']);
        // return $pdf->stream();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(
        JobFamily $jobFamily,
        JobFamily $subJobFamily,
        Syllabus $syllabus
    ) {
        $this->authorize('learning_syllabus_edit');

        if ($subJobFamily->parent_id != $jobFamily->id) {
            abort(404);
        }
        if ($syllabus->job_family_id != $subJobFamily->id) {
            abort(404);
        }

        $syllabus_levels = [];
        $syllabus_statuses = [];
        // $syllabus_units = [];
        // $syllabus_locations = [];
        // $syllabus_competencies = [];
        $syllabus_vendors = [];

        foreach ($syllabus->levelsSyllabuses as $syllabus_level) {
            $syllabus_levels[] = $syllabus_level->id;
        }
        foreach ($syllabus->statusesSyllabuses as $syllabus_status) {
            $syllabus_statuses[] = $syllabus_status->id;
        }
        // foreach ($syllabus->unitsSyllabuses as $syllabus_unit) {
        //     $syllabus_units[] = $syllabus_unit->id;
        // }
        // foreach ($syllabus->locationsSyllabuses as $syllabus_location) {
        //     $syllabus_locations[] = $syllabus_location->id;
        // }
        // foreach ($syllabus->prfCompetencyCatalog as $syllabus_competency) {
        //     $syllabus_competencies[] = $syllabus_competency->id;
        // }

        foreach ($syllabus->vendorsSyllabuses as $syllabus_vendor) {
            $syllabus_vendors[] = $syllabus_vendor->id;
        }

        // $competencies = PrfCompetencyCatalog::where('status', 1)->orderBy('name')->get(['id', 'name']);
        // $vendors = Vendor::all('id', 'partner_name')->sortBy('partner_name');
        $levels = Level::all('id', 'name')->sortBy('name');
        $statuses = Status::all('id', 'name')->sortBy('name');
        // $units = OrganizationUnit::all('id', 'name')->sortBy('name');
        // $locations = Location::all('id', 'name')->sortBy('name');

        return view(
            'LearningSyllabus.SubJobFamily.Syllabus.edit',
            compact(
                'jobFamily',
                'subJobFamily',
                'syllabus',
                'levels',
                'statuses',
                'syllabus_levels',
                'syllabus_statuses',
                'syllabus_vendors'
            )
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(
        UpdateSyllabusRequest $request,
        SyllabusService $service,
        JobFamily $jobFamily,
        JobFamily $subJobFamily,
        Syllabus $syllabus
    ) {
        $array_levels_name = [];
        $array_statuses_name = [];
        $array_units_name = [];
        $array_locations_name = [];
        $array_competencies_name = [];
        $array_vendors_name = [];

        $levels_select = Level::whereIn('id', $request->levels)->get();
        $statuses_select = Status::whereIn('id', $request->statuses)->get();
        $units_select = OrganizationUnit::whereIn('organization_id', $request->units)->get();
        $locations_select = Location::whereIn('location_id', $request->locations)->get();
        $competencies_select = PrfCompetencyCatalog::whereIn('id', $request->skills_will_you_gain)->get();
        $vendors_select = Vendor::whereIn('id', $request->partner_recommendation)->get();

        foreach ($levels_select as $level_select) {
            $array_levels_name[] = $level_select->name;
        }
        foreach ($statuses_select as $status_select) {
            $array_statuses_name[] = $status_select->name;
        }
        foreach ($units_select as $unit_select) {
            $array_units_name[] = $unit_select->name;
        }
        foreach ($locations_select as $location_select) {
            $array_locations_name[] = $location_select->location_code;
        }
        foreach ($competencies_select as $competency_select) {
            $array_competencies_name[] = $competency_select->name;
        }
        foreach ($vendors_select as $vendor_select) {
            $array_vendors_name[] = $vendor_select->partner_name;
        }

        $service->updateSyllabus(
            $request->training_name,
            $request->training_summary,
            $request->training_background,
            $request->training_description,
            $array_levels_name,
            $array_statuses_name,
            $array_locations_name,
            $array_units_name,
            $array_competencies_name,
            $request->learning_scope,
            $array_vendors_name,
            $request->levels,
            $request->statuses,
            $request->locations,
            $request->units,
            $request->skills_will_you_gain,
            $request->partner_recommendation,
            $syllabus,
        );

        toast('Syllabus Successfully Updated', 'success');

        return redirect()->route('learning-syllabus.job-families.sub-job-families.syllabuses.edit', [$jobFamily, $subJobFamily, $syllabus]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobFamily $jobFamily, JobFamily $subJobFamily, Syllabus $syllabus)
    {
        $this->authorize('learning_syllabus_delete');

        if ($subJobFamily->parent_id != $jobFamily->id) {
            abort(404);
        }
        if ($syllabus->job_family_id != $subJobFamily->id) {
            abort(404);
        }
        toast('Syllabus Successfully Deleted', 'success');

        $syllabus->delete();

        return redirect()->route('learning-syllabus.job-families.sub-job-families.syllabuses.index', [$jobFamily, $subJobFamily])
            ->with('delete_sub_job_family_syllabus_message_success', 'Syllabus deleted successfully. <a href="'.route('learning-syllabus.job-families.sub-job-families.syllabuses.restore', [$jobFamily, $subJobFamily,$syllabus]). '" class="alert-link"> Whoops, Undo</a>');
    }

    public function restore(JobFamily $jobFamily, JobFamily $subJobFamily, int $syllabus_id)
    {
        $this->authorize('learning_syllabus_edit');

        $status_syllabuses = SyllabusStatus::all('id', 'name');

        $syllabus = Syllabus::withTrashed()->findOrFail($syllabus_id);

        if ($subJobFamily->parent_id != $jobFamily->id) {
            abort(404);
        }
        if ($syllabus->job_family_id != $subJobFamily->id) {
            abort(404);
        }

        if ($syllabus && $syllabus->trashed()) {
            $syllabus->restore();
        }

        toast('Syllabus Restored Successfully', 'success');

        return redirect()->route('learning-syllabus.job-families.sub-job-families.syllabuses.index', [$jobFamily, $subJobFamily]);
    }

    public function restoreArchive(Request $request, JobFamily $jobFamily, JobFamily $subJobFamily)
    {

        $this->authorize('learning_syllabus_edit');

        $validated = $request->validate([
            'syllabus_id.*' =>  [
                'required',
                'numeric',
                'distinct',
                'exists:syllabuses,id',
            ],
        ]);

        Syllabus::onlyTrashed()
            ->whereIn('id', $request->syllabus_id)
            ->restore();

        toast('Syllabus Restored Successfully', 'success');
    }

    public function forceDelete(Request $request, JobFamily $jobFamily, JobFamily $subJobFamily)
    {
        $this->authorize('learning_syllabus_delete');

        $validated = $request->validate([
            'syllabus_id.*' =>  [
                'required',
                'numeric',
                'distinct',
                'exists:syllabuses,id',
            ],
        ]);

        Syllabus::onlyTrashed()
            ->whereIn('id', $request->syllabus_id)
            ->forceDelete();

        toast('Syllabus Successfully Deleted', 'success');
    }

    public function archive(JobFamily $jobFamily, JobFamily $subJobFamily)
    {
        $this->authorize('learning_syllabus_access');

        if ($subJobFamily->parent_id != $jobFamily->id) {
            abort(404);
        }

        $syllabuses = Syllabus::onlyTrashed()->where('job_family_id', $subJobFamily->id)->get();

        return view('LearningSyllabus.SubJobFamily.Syllabus.Archive.index', compact('jobFamily', 'subJobFamily', 'syllabuses'));
    }


    public function activate(JobFamily $jobFamily, JobFamily $subJobFamily, Syllabus $syllabus)
    {
        $this->authorize('learning_syllabus_edit');

        if ($syllabus->status_id != 2) {
            abort(403);
        }

        if ($subJobFamily->parent_id != $jobFamily->id) {
            abort(403);
        }

        if ($syllabus->job_family_id != $subJobFamily->id) {
            abort(403);
        }
        $syllabus->update([
            'status_id' => 1
        ]);
        toast('Syllabus Successfully Activated', 'success');

        return redirect()->route('learning-syllabus.job-families.sub-job-families.syllabuses.show', [$jobFamily, $subJobFamily, $syllabus]);
    }

    public function deactivate(JobFamily $jobFamily, JobFamily $subJobFamily, Syllabus $syllabus)
    {
        $this->authorize('learning_syllabus_edit');

        if ($syllabus->status_id != 1) {
            abort(403);
        }

        if ($subJobFamily->parent_id != $jobFamily->id) {
            abort(403);
        }

        if ($syllabus->job_family_id != $subJobFamily->id) {
            abort(403);
        }
        $syllabus->update([
            'status_id' => 2
        ]);
        toast('Syllabus Successfully Deactivated', 'success');

        return redirect()->route('learning-syllabus.job-families.sub-job-families.syllabuses.show', [$jobFamily, $subJobFamily, $syllabus]);
    }

    public function getAjaxSyllabus(Jobfamily $jobFamily, JobFamily $subJobFamily)
    {
        $this->authorize('learning_syllabus_access');
        
        $model = Syllabus::with('syllabusJobFamily', 'syllabusStatus')->where('job_family_id', $subJobFamily->id)
        ->latest()->select('syllabuses.*');

        return Datatables::of($model)
            ->editColumn('status_id', static function ($model) {
                if ($model->status_id == 1) {
                    return '<span class="badge badge-pill badge-success">'.$model->syllabusStatus->name.'</span>';
                }
                if ($model->status_id == 2) {
                    return '<span class="badge badge-pill badge-muted">'.$model->syllabusStatus->name.'</span>';
                }
                if ($model->status_id == 3) {
                    return '<span class="badge badge-pill badge-warning">'.$model->syllabusStatus->name.'</span>';
                }
                if ($model->status_id == 4) {
                    return '<span class="badge badge-pill badge-danger">'.$model->syllabusStatus->name.'</span>';
                }
            })->editColumn('training_name', function ($model) use ($jobFamily) {
                return '
                <a href="'.route('learning-syllabus.job-families.sub-job-families.syllabuses.show', [$jobFamily->id, $model->syllabusJobFamily->id, $model->id]).'">
                    <div class="text-wrap" style="width: 27rem;">
                        '.$model->training_name.'
                    </div>
                </a>';
            })->addColumn('action', static function ($model) use ($jobFamily) {
                return view('LearningSyllabus.SubJobFamily.Syllabus.Datatables.action', compact('model', 'jobFamily'));
            })->rawColumns(['training_name', 'status_id', 'action'])
            ->toJson();
    }

    public function getSelect2LocationsAjax(
        JobFamily $jobFamily,
        JobFamily $subJobFamily,
        Request $request
    ) {
            abort_if(! Auth::user()->hasAnyPermission([
                'learning_syllabus_create', 'learning_syllabus_edit'
            ]), 403);
    
        if ($subJobFamily->parent_id != $jobFamily->id) {
            abort(404);
        }

        if ($request->ajax()) {
            $term = trim($request->term);
            $locations = DB::table('location')
            ->select('location_id as id', 'location_code as text')
                ->where('location_code', 'LIKE', '%' . $term. '%')
                ->orderBy('location_code', 'asc')
                ->simplePaginate(10);
    
            $morePages = true;
            $pagination_obj = json_encode($locations);
            if (empty($locations->nextPageUrl())) {
                $morePages=false;
            }
            $results = array(
              "results" => $locations->items(),
              "pagination" => array(
                "more" => $morePages
              )
            );
    
            return response()->json($results);
        }
    }
    
    public function getSelect2OrganizationUnitsAjax(
        JobFamily $jobFamily,
        JobFamily $subJobFamily,
        Request $request
    ) {
        abort_if(! Auth::user()->hasAnyPermission([
            'learning_syllabus_create', 'learning_syllabus_edit'
        ]), 403);
    
        if ($subJobFamily->parent_id != $jobFamily->id) {
            abort(404);
        }

        if ($request->ajax()) {
            $term = trim($request->term);
            $organizationUnits = DB::table('organization_units')
            ->select('organization_id as id', 'name as text')
                ->where('name', 'LIKE', '%' . $term. '%')
                ->orderBy('name', 'asc')
                ->simplePaginate(10);
    
            $morePages = true;
            $pagination_obj = json_encode($organizationUnits);
            if (empty($organizationUnits->nextPageUrl())) {
                $morePages=false;
            }
            $results = array(
              "results" => $organizationUnits->items(),
              "pagination" => array(
                "more" => $morePages
              )
            );
    
            return response()->json($results);
        }
    }
    
    public function getSelect2CompetenciesAjax(
        JobFamily $jobFamily,
        JobFamily $subJobFamily,
        Request $request
    ) {
            abort_if(! Auth::user()->hasAnyPermission([
                'learning_syllabus_create', 'learning_syllabus_edit'
            ]), 403);
        
        if ($subJobFamily->parent_id != $jobFamily->id) {
            abort(404);
        }
                
        if ($request->ajax()) {
            $term = trim($request->term);
            $competencies = DB::table('prf_competency_catalog')
            ->select('id', 'name as text')
                ->where('name', 'LIKE', '%' . $term. '%')
                ->orderBy('name', 'asc')
                ->simplePaginate(10);
        
            $morePages = true;
            $pagination_obj = json_encode($competencies);
            if (empty($competencies->nextPageUrl())) {
                $morePages=false;
            }
            $results = array(
              "results" => $competencies->items(),
              "pagination" => array(
                "more" => $morePages
              )
            );
        
            return response()->json($results);
        }
    }

    public function getSelect2VendorsAjax(JobFamily $jobFamily, JobFamily $subJobFamily, Request $request)
    {
        abort_if(! Auth::user()->hasAnyPermission([
            'learning_syllabus_create', 'learning_syllabus_edit'
        ]), 403);

        if ($subJobFamily->parent_id != $jobFamily->id) {
            abort(404);
        }
        
        if ($request->ajax()) {
            $term = trim($request->term);
            $vendors = DB::table('vendors')
            ->select('id', 'partner_name as text')
                ->where('status_id', 1)
                ->where('partner_name', 'LIKE', '%' . $term. '%')
                ->orderBy('partner_name', 'asc')
                ->simplePaginate(10);

            $morePages = true;
            $pagination_obj = json_encode($vendors);
            if (empty($vendors->nextPageUrl())) {
                $morePages=false;
            }
            $results = array(
              "results" => $vendors->items(),
              "pagination" => array(
                "more" => $morePages
              )
            );

            return response()->json($results);
        }
    }
}
