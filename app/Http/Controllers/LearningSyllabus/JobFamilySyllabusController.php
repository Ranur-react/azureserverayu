<?php

namespace App\Http\Controllers\LearningSyllabus;

use App\Http\Controllers\Controller;
use App\Models\Competency;
use App\Models\JobFamily;
use App\Models\MasterData;
use App\Models\Syllabus;
use App\Models\Vendor;
use App\Http\Requests\LearningAdmin\Store\StoreSyllabusRequest;
use App\Http\Requests\LearningAdmin\Update\UpdateSyllabusRequest;
use App\Models\Level;
use App\Models\Location;
use App\Models\PrfCompetencyCatalog;
use App\Models\Status;
use App\Models\OrganizationUnit;
use App\Models\User;
use App\Notifications\SyllabusCreate;
use App\Services\SyllabusService;
use Auth;
use Spatie\Activitylog\Models\Activity;
use Illuminate\Http\Request;
use Notification;
use DataTables;
use DB;

class JobFamilySyllabusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create(JobFamily $jobFamily)
    {
        $this->authorize('learning_syllabus_create');

        // $competencies = PrfCompetencyCatalog::where('status', 1)->orderBy('name')->get(['id', 'name']);
        // $vendors = Vendor::all('id', 'partner_name')->sortBy('partner_name');
        $levels = Level::all('id', 'name')->sortBy('name');
        $statuses = Status::all('id', 'name')->sortBy('name');
        // $units = OrganizationUnit::all('id', 'name')->sortBy('name');
        // $locations = Location::all('id', 'name')->sortBy('name');
        return view('LearningSyllabus.JobFamily.Syllabus.create', compact('jobFamily', 'levels', 'statuses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreSyllabusRequest $request, SyllabusService $service, JobFamily $jobFamily)
    {
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

        $syllabus = $service->storeSyllabus(
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
            $jobFamily
        );

        $atasan = User::where('nik', Auth::user()->employee->nik_atasan)->first();
        Notification::send($atasan, new SyllabusCreate($syllabus));

        toast('Syllabus Successfully Created', 'success');

        return redirect()->route('learning-syllabus.job-families.sub-job-families.index', $jobFamily);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(JobFamily $jobFamily, Syllabus $syllabus)
    {
        $this->authorize('learning_syllabus_show');

        if ($syllabus->job_family_id != $jobFamily->id) {
            abort(404);
        }

        $activities  = Activity::with('subject', 'causer.employee')->where('subject_type', 'App\Models\Syllabus')
            ->where('subject_id', $syllabus->id)
            ->orderBy('created_at')
            ->get();

        $max_number = $jobFamily->syllabuses()->where('status_id', 1)->max('number') + 1;

        return view('LearningSyllabus.JobFamily.Syllabus.newshow', compact('jobFamily', 'syllabus', 'activities', 'max_number'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(JobFamily $jobFamily, Syllabus $syllabus)
    {
        $this->authorize('learning_syllabus_edit');

        if ($syllabus->job_family_id != $jobFamily->id) {
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
            'LearningSyllabus.JobFamily.Syllabus.edit',
            compact(
                'jobFamily',
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(
        UpdateSyllabusRequest $request,
        SyllabusService $service,
        JobFamily $jobFamily,
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
        return redirect()->route('learning-syllabus.job-families.syllabuses.edit', [$jobFamily,$syllabus]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */


    public function destroy(JobFamily $jobFamily, Syllabus $syllabus)
    {
        $this->authorize('learning_syllabus_delete');

        if ($syllabus->job_family_id != $jobFamily->id) {
            abort(404);
        }

        $syllabus->delete();

        toast('Syllabus Successfully Deleted', 'success');

        return redirect()->route('learning-syllabus.job-families.sub-job-families.index', $jobFamily)
            ->with('delete_job_family_syllabus_message_success', 'Syllabus deleted successfully. <a href="'.route('learning-syllabus.job-families.syllabuses.restore', [$jobFamily, $syllabus]). '" class="alert-link"> Whoops, Undo</a>');
    }

    public function restore(JobFamily $jobFamily, int $syllabus_id)
    {
        $this->authorize('learning_syllabus_edit');

        $syllabus = Syllabus::withTrashed()->findOrFail($syllabus_id);

        if ($syllabus->job_family_id != $jobFamily->id) {
            abort(404);
        }

        if ($syllabus && $syllabus->trashed()) {
            $syllabus->restore();
        }

        toast('Syllabus Restored Successfully', 'success');

        return redirect()->route('learning-syllabus.job-families.sub-job-families.index', $jobFamily);
    }

    public function restoreArchive(Request $request, JobFamily $jobFamily)
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

    public function forceDelete(Request $request, JobFamily $jobFamily)
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

    public function activate(JobFamily $jobFamily, Syllabus $syllabus)
    {
        $this->authorize('learning_syllabus_edit');

        if ($syllabus->status_id != 2) {
            abort(403);
        }
        if ($syllabus->job_family_id != $jobFamily->id) {
            abort(403);
        }
        $syllabus->update([
            'status_id' => 1
        ]);

        toast('Syllabus Successfully Activated', 'success');

        return redirect()->route('learning-syllabus.job-families.syllabuses.show', [$jobFamily, $syllabus]);
    }

    public function deactivate(JobFamily $jobFamily, Syllabus $syllabus)
    {
        $this->authorize('learning_syllabus_edit');

        if ($syllabus->status_id != 1) {
            abort(403);
        }

        if ($syllabus->job_family_id != $jobFamily->id) {
            abort(403);
        }
        $syllabus->update([
            'status_id' => 2
        ]);

        toast('Syllabus Successfully Deactivated', 'success');

        return redirect()->route('learning-syllabus.job-families.syllabuses.show', [$jobFamily, $syllabus]);
    }

    public function getSelect2LocationsAjax(
        JobFamily $jobFamily,
        Request $request
    ) {
        abort_if(! Auth::user()->hasAnyPermission([
            'learning_syllabus_create', 'learning_syllabus_edit'
        ]), 403);

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
        Request $request
    ) {
        abort_if(! Auth::user()->hasAnyPermission([
            'learning_syllabus_create', 'learning_syllabus_edit'
        ]), 403);

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
        Request $request
    ) {
            abort_if(! Auth::user()->hasAnyPermission([
                'learning_syllabus_create', 'learning_syllabus_edit'
            ]), 403);
    
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

    public function getSelect2VendorsAjax(
        JobFamily $jobFamily,
        Request $request
    ) {
            abort_if(! Auth::user()->hasAnyPermission([
                'learning_syllabus_create', 'learning_syllabus_edit'
            ]), 403);
        
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
