<?php

namespace App\Http\Controllers\LearningNeedAnalysis;

use App\Http\Controllers\Controller;
use App\Http\Requests\LearningAdmin\Store\StoreRequestSyllabus;
use App\Http\Requests\LearningAdmin\Store\StoreSyllabusRequest;
use App\Http\Requests\LearningAdmin\Store\StoreUserNeedRequest;
use App\Http\Requests\SuperAdmin\Store\StoreUserRequest;
use App\Imports\UserNeedImport;
use Illuminate\Http\Request;
use App\Models\Competency;
use App\Models\Employee;
use App\Models\Hcbp;
use App\Models\JobFamily;
use App\Models\Level;
use App\Models\Location;
use App\Models\MasterData;
use App\Models\RequestSyllabus;
use App\Models\RequestSyllabusStatus;
use App\Models\Status;
use App\Models\Syllabus;
use App\Models\OrganizationUnit;
use App\Models\PrfCompetencyCatalog;
use App\Models\User;
use App\Models\UserNeed;
use App\Models\Vendor;
use App\Notifications\LDRequestSyllabusApprove;
use App\Notifications\LDRequestSyllabusReject;
use App\Notifications\UserNeedsHcbpProcess;
use App\Services\SyllabusService;
use Gloudemans\Shoppingcart\Facades\Cart;
use Auth;
use DataTables;
use DB;
use Excel;
use Illuminate\Support\Facades\Validator;
use Notification;
use PhpOffice\PhpSpreadsheet\Calculation\LookupRef\Offset;
use Spatie\Activitylog\Models\Activity;

class UserNeedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Learning Design yang memiliki bawahan

        $employees = Employee::where('nik_atasan', Auth::user()->employee->nik)->get();

        abort_if($employees->count() == 0, 404);

        $user_needs = UserNeed::with('userNeedStatus')
        ->where('created_by_nik', Auth::user()->employee->nik)
        ->latest()
        ->get();

        return view('LearningNeedAnalysis.UserNeeds.index', compact('user_needs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employees = Employee::where('nik_atasan', Auth::user()->employee->nik)->get();

        abort_if($employees->count() == 0, 404);

        $cart_user_need = Cart::instance('user-needs')->content();
 
        if($cart_user_need->count() > 0)
        {
            foreach($cart_user_need as $row)
            {
                $syllabus = Syllabus::where('id', $row->id)->first();
                $training_background = $syllabus->training_background;
                foreach($syllabus->prfCompetencyCatalog as $competency)
                {
                    $competency_names[] = $competency->name;
                    $string_name = implode(", ", $competency_names);
                }
            }
        }else{
            $training_background = null;
            $string_name = null;
        }
        return view('LearningNeedAnalysis.UserNeeds.create', 
        compact('cart_user_need', 'training_background', 'string_name'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserNeedRequest $request)
    {
        $cart_user_need = Cart::instance('user-needs')->content();

        foreach($cart_user_need as $row)
        {
            $syllabus = Syllabus::where('id', $row->id)->first();
        }

        if($cart_user_need->count() > 0)
        {
            $hcbp = Hcbp::where('region', Auth::user()->employee->admins)
            ->where('area', Auth::user()->employee->area_group)
            ->where('directorate', Auth::user()->employee->directorate)
            ->first();

            $user_hcbp = User::whereHas('employee.hcbp', function($q){
                $q->where('region', Auth::user()->employee->admins)
                ->where('area', Auth::user()->employee->area_group)
                    ->where('directorate', Auth::user()->employee->directorate);
            })->first();

            if($request->target_participants == 1){
                DB::transaction(function() use ($request, $hcbp, $syllabus, $user_hcbp) {
                    $user_need = UserNeed::create([
                        'name_of_program' => $request->name_of_program,
                        'objective_program' => $request->objective_program,
                        'training_urgency' => $request->training_urgency,
                        'future_plans_after_training' => $request->future_plans_after_training,
                        'content' => $request->content,
                        'vendor_id' => $request->partner_recommendation,
                        'trainer' => $request->trainer,
                        'specialities_trainer' => $request->specialities_trainer,
                        'method' => $request->method,
                        'date' => $request->date,
                        'start_time' => $request->start_time,
                        'end_time' => $request->end_time,
                        'hcbp_nik' => $hcbp->nik,
                        'syllabus_id' => $syllabus->id,
                        'created_by_nik' => Auth::user()->employee->nik,
                        'status_id' => 1,
                    ]);
                    Excel::import(new UserNeedImport($user_need), $request->file('import_file'));

                    activity()
                    ->performedOn($user_need)
                    ->event('Waiting For HCBP')
                    ->log('created');

                    Notification::send($user_hcbp, new UserNeedsHcbpProcess($user_need));
                });
            }else{
                DB::transaction(function() use ($request, $hcbp, $syllabus, $user_hcbp) {
                    $user_need_form = UserNeed::create([
                        'name_of_program' => $request->name_of_program,
                        'objective_program' => $request->objective_program,
                        'training_urgency' => $request->training_urgency,
                        'future_plans_after_training' => $request->future_plans_after_training,
                        'content' => $request->content,
                        'vendor_id' => $request->partner_recommendation,
                        'trainer' => $request->trainer,
                        'specialities_trainer' => $request->specialities_trainer,
                        'method' => $request->method,
                        'date' => $request->date,
                        'start_time' => $request->start_time,
                        'end_time' => $request->end_time,
                        'hcbp_nik' => $hcbp->nik,
                        'syllabus_id' => $syllabus->id,
                        'created_by_nik' => Auth::user()->employee->nik,
                        'status_id' => 1,
                    ]);
                    $user_need_form->userNeedsEmployees()->attach($request->employees);

                    activity()
                    ->performedOn($user_need_form)
                    ->event('Waiting For HCBP')
                    ->log('created');

                    Notification::send($user_hcbp, new UserNeedsHcbpProcess($user_need_form));
                });
            }

            foreach ($cart_user_need as $delete) {
                Cart::instance('user-needs')->remove($delete->rowId);
            }

            toast('User Needs Successfully Created', 'success');

            return redirect()->route('learning-need-analysis.user-needs.index');
        }else{
            abort(404);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(UserNeed $user_need)
    {
        $employees = Employee::where('nik_atasan', Auth::user()->employee->nik)->get();

        abort_if($employees->count() == 0, 404);

        $activities  = Activity::with('subject')
            ->where('subject_type', 'App\Models\UserNeed')
            ->where('subject_id', $user_need->id)
            ->orderBy('created_at')
            ->get();

        foreach($user_need->syllabus->prfCompetencyCatalog as $competency)
        {
            $competency_names[] = $competency->name;
            $string_name = implode(", ", $competency_names);
        }
        
        return view('LearningNeedAnalysis.UserNeeds.show', compact('user_need', 'string_name', 'activities'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $request_syllabus = RequestSyllabus::findOrFail($id);

        $request_syllabus_levels = [];
        $request_syllabus_statuses = [];
        $request_syllabus_units = [];
        $request_syllabus_locations = [];
        $request_syllabus_competencies = [];
        $request_syllabus_vendors = [];

        foreach($request_syllabus->levels as $request_syllabus_level)
        {
            $request_syllabus_levels[] = $request_syllabus_level->id;
        }
        foreach($request_syllabus->statuses as $request_syllabus_status)
        {
            $request_syllabus_statuses[] = $request_syllabus_status->id;
        }

        foreach($request_syllabus->units as $request_syllabus_unit)
        {
            $request_syllabus_units[] = $request_syllabus_unit->id;
        }

        foreach($request_syllabus->locations as $request_syllabus_location)
        {
            $request_syllabus_locations[] = $request_syllabus_location->id;
        }

        foreach($request_syllabus->competencies as $request_syllabus_competency)
        {
            $request_syllabus_competencies[] = $request_syllabus_competency->id;
        }

        foreach($request_syllabus->vendors as $request_syllabus_vendor)
        {
            $request_syllabus_vendors[] = $request_syllabus_vendor->id;
        }

        $jobFamilies = JobFamily::with('jobFamilySubJobFamily')->where('level', 0)->get();

        $competencies = PrfCompetencyCatalog::where('status',1)->orderBy('name')->get(['id', 'name']);
        $vendors = Vendor::all('id', 'partner_name')->sortBy('partner_name');
        $levels = Level::all('id','name')->sortBy('name');
        $statuses = Status::all('id','name')->sortBy('name');
        $units = OrganizationUnit::all('id','name')->sortBy('name');
        $locations = Location::all('id','name')->sortBy('name');
        return view('LearningDesign.LearningNeedAnalysis.UserNeeds.edit',
        compact('request_syllabus', 'jobFamilies', 'competencies',
        'vendors', 'levels', 'statuses', 'units', 'locations',
        'request_syllabus_levels', 'request_syllabus_statuses', 'request_syllabus_units',
        'request_syllabus_locations', 'request_syllabus_competencies', 'request_syllabus_vendors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreRequestSyllabus  $request, SyllabusService $service, $id)
    {
        $request_syllabus = RequestSyllabus::findOrFail($id);
        if(empty($request->sub_job_family)){
            $jobFamily = JobFamily::findOrFail($request->job_family);
            $syllabus = $service->storeRequestSyllabus(
                $jobFamily->job_family_code,
                $request->training_name,
                $request->training_summary,
                $request->training_background,
                $request->training_description,
                $request->learning_scope,
                $jobFamily->id,
                $request->skills_will_you_gain,
                $request->level,
                $request->status,
                $request->lokasi_kerja,
                $request->partner_recommendation,
                $request->unit,
            );
        }else{
            $jobFamily = JobFamily::findOrFail($request->sub_job_family);
            $syllabus = $service->storeRequestSyllabus(
                $jobFamily->job_family_code,
                $request->training_name,
                $request->training_summary,
                $request->training_background,
                $request->training_description,
                $request->learning_scope,
                $jobFamily->id,
                $request->skills_will_you_gain,
                $request->level,
                $request->status,
                $request->lokasi_kerja,
                $request->partner_recommendation,
                $request->unit,
            );
        }

        $request_syllabus->update([
            'status_id' => 1,
            'syllabus_id' => $syllabus->id,
        ]);

        $user = User::where('id', $request_syllabus->created_by)->first();

        Notification::send($user, new LDRequestSyllabusApprove($request_syllabus->id));

        toast('Request Syllabus Successfully Approved', 'success');

        return redirect()->route('learning-design.learning-need-analysis.user-needs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserNeed $user_need)
    {
        $employees = Employee::where('nik_atasan', Auth::user()->employee->nik)->get();

        abort_if($employees->count() == 0, 404);

        $user_need->delete();

        toast('User Needs Deleted Successfully', 'success');

        return redirect()->back();
    }

    public function getAjaxSyllabus()
    {
        $employees = Employee::where('nik_atasan', Auth::user()->employee->nik)->get();

        abort_if($employees->count() == 0, 404);

        $cart_user_needs = Cart::instance('user-needs')->content();

        $model = PrfCompetencyCatalog::with(
            ['syllabuses' => fn($query) =>
            $query->where('status_id', 1)
        ])
        ->whereHas('syllabuses', fn ($query) =>
            $query->where('status_id', 1)
        )->select('prf_competency_catalog.*');

        return Datatables::of($model)
            ->addColumn('competencies', function (PrfCompetencyCatalog $prfCompetencyCatalog) use ($cart_user_needs) {
                return view('LearningNeedAnalysis.UserNeeds.AjaxSyllabus.index',
                compact('prfCompetencyCatalog', 'cart_user_needs'));
            })->rawColumns(['competencies'])
            ->toJson();
    }

    public function getSelect2VendorsAjax(Request $request)
    {    
        $employees = Employee::where('nik_atasan', Auth::user()->employee->nik)->get();

        abort_if($employees->count() == 0, 404);

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

    public function downloadFormat()
    {
        if (is_file(public_path('storage\files\excel\format\user_needs\TargetParticipants_Format.xlsx'))){
            return response()->download(public_path('storage\files\excel\format\user_needs\TargetParticipants_Format.xlsx'));
        }else{
            abort(404);
        }  
    }

    public function getAjaxEmployees(Request $request)
    {    
        $employees = Employee::where('nik_atasan', Auth::user()->employee->nik)->get();

        abort_if($employees->count() == 0, 404);

        $model = Employee::query();

        return DataTables::of($model)->toJson();
    }

    public function getUserNeedAjaxEmployees(UserNeed $user_need)
    {
        $employees = Employee::where('nik_atasan', Auth::user()->employee->nik)->get();

        abort_if($employees->count() == 0, 404);

        $query = DB::table('user_need_employee')
            ->join('user_needs', 'user_need_employee.user_need_id', '=', 'user_needs.id')
            ->join('employee', 'user_need_employee.nik', '=', 'employee.nik')
            ->where('user_need_id', $user_need->id)
            ->select(['employee.nik', 'employee.name', 'employee.division', 'employee.bgroup']);

        return Datatables::of($query)
            ->toJson();
    }

    public function requestSyllabus()
    {
        $jobFamilies = JobFamily::where('level', 0)->get();
        $competencies = PrfCompetencyCatalog::where('status',1)->orderBy('name')->get(['id', 'name']);
        $vendors = Vendor::all('id', 'partner_name')->sortBy('partner_name');
        $levels = Level::all('id','name')->sortBy('name');
        $status = Status::all('id','name')->sortBy('name');
        $units = OrganizationUnit::all('id','name')->sortBy('name');
        $locations = Location::all('id','name')->sortBy('name');
        return view('LearningDesign.LearningNeedAnalysis.UserNeeds.RequestSyllabus.index',
        compact('jobFamilies', 'competencies', 'vendors', 'levels', 'status', 'units', 'locations'));
    }

    public function reject($id)
    {
        $request_syllabus = RequestSyllabus::findOrFail($id);
        if ($request_syllabus->status_id != 3) {
            abort(403);
        }
        $request_syllabus->update([
            'status_id' => 4
        ]);

        $user = User::where('id', $request_syllabus->created_by)->first();

        Notification::send($user, new LDRequestSyllabusReject($request_syllabus->id));

        toast('Request Syllabus Successfully Rejected', 'success');

        return redirect()->route('learning-design.learning-need-analysis.user-needs.index');
    }

    public function approve(SyllabusService $service, $id)
    {
        $request_syllabus = RequestSyllabus::findOrFail($id);

        if ($request_syllabus->status_id != 3) {
            abort(403);
        }

        $syllabus_levels = [];
        $syllabus_statuses = [];
        $syllabus_units = [];
        $syllabus_locations = [];
        $syllabus_competencies = [];
        $syllabus_vendors = [];

        foreach($request_syllabus->levels as $syllabus_level)
        {
            $syllabus_levels[] = $syllabus_level->id;
        }
        foreach($request_syllabus->statuses as $syllabus_status)
        {
            $syllabus_statuses[] = $syllabus_status->id;
        }

        foreach($request_syllabus->units as $syllabus_unit)
        {
            $syllabus_units[] = $syllabus_unit->id;
        }

        foreach($request_syllabus->locations as $syllabus_location)
        {
            $syllabus_locations[] = $syllabus_location->id;
        }

        foreach($request_syllabus->competencies as $syllabus_competency)
        {
            $syllabus_competencies[] = $syllabus_competency->id;
        }

        foreach($request_syllabus->vendors as $syllabus_vendor)
        {
            $syllabus_vendors[] = $syllabus_vendor->id;
        }

        $syllabus = $service->storeRequestSyllabus(
            $request_syllabus->syllabusJobFamily->job_family_code,
            $request_syllabus->training_name,
            $request_syllabus->training_summary,
            $request_syllabus->training_background,
            $request_syllabus->training_description,
            $request_syllabus->learning_scope,
            $request_syllabus->syllabusJobFamily->id,
            $syllabus_competencies,
            $syllabus_levels,
            $syllabus_statuses,
            $syllabus_locations,
            $syllabus_vendors,
            $syllabus_units,
        );

        $request_syllabus->update([
            'status_id' => 1,
            'syllabus_id' => $syllabus->id,
        ]);

        $user = User::where('id', $request_syllabus->created_by)->first();

        Notification::send($user, new LDRequestSyllabusApprove($request_syllabus->id));

        toast('Request Syllabus Successfully Approved', 'success');

        return redirect()->route('learning-design.learning-need-analysis.user-needs.index');
    }

    public function atasanAjaxUserNeeds($id)
    {
        $query =DB::table('user_needs')
            ->join('users', 'user_needs.user_id', '=', 'users.id')
            ->join('syllabuses', 'user_needs.syllabus_id', '=', 'syllabuses.id')
            ->where('syllabus_id', $id)
            ->where('user_needs.created_by', '=', Auth::user()->id)
            ->select([
                'users.nik', 'users.name', 'users.title', 'users.organization']);

        return DataTables::of($query)
            ->toJson();
    }

    public function historyAtasanUserNeeds()
    {
        $query = DB::table('user_needs')
            ->join('users', 'user_needs.user_id', '=', 'users.id')
            ->join('syllabuses', 'user_needs.syllabus_id', '=', 'syllabuses.id')
            ->join('user_needs_statuses', 'user_needs.status_id', '=', 'user_needs_statuses.id')
            ->where('user_needs.created_by', '=', Auth::user()->id)
            ->groupBy('syllabus_id')
            ->orderBy('count', 'desc')
            ->select(
                'user_needs.*',
                DB::raw('COUNT(syllabus_id) as count'),
                'syllabuses.syllabus_code',
                'syllabuses.training_name',
                'user_needs_statuses.name'

                // 'users.name',
                // 'users.division',
            );

        return DataTables::of($query)
            ->editColumn('status_id', static function ($model) {
                if($model->status_id == 1){
                    return '<span class="badge badge-pill badge-success">Approve</span>';
                }
                if($model->status_id == 2){
                    return '<span class="badge badge-pill badge-warning">Pending</span>';
                }
                if($model->status_id == 3){
                    return '<span class="badge badge-pill badge-danger">Reject</span>';
                }
            })->addColumn('action', function ($model) {
                return '<a href="'.route('learning-design.learning-need-analysis.user-needs.atasanAjaxUserNeeds', $model->syllabus_id).'" class="btn btn-sm btn-primary pe-auto modal-karyawan">View</a>';
            })->rawColumns(['status_id', 'action'])
            ->toJson();
    }
}
