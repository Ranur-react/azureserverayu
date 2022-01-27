<?php

namespace App\Http\Controllers\LearningDesign\LearningNeedAnalysis;

use App\Http\Controllers\Controller;
use App\Http\Requests\LearningAdmin\Store\StoreRequestSyllabus;
use App\Http\Requests\LearningAdmin\Update\UpdateRequestSyllabus;
use App\Models\Competency;
use App\Models\JobFamily;
use App\Models\Level;
use App\Models\Location;
use App\Models\RequestSyllabus;
use App\Models\RequestSyllabusStatus;
use App\Models\Status;
use App\Models\OrganizationUnit;
use App\Models\PrfCompetencyCatalog;
use App\Models\User;
use App\Models\Vendor;
use App\Services\SyllabusService;
use Auth;
use Carbon\Carbon;
use Cart;
use Illuminate\Http\Request;
use DataTables;
use Spatie\Activitylog\Models\Activity;

class RequestSyllabusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('nik_atasan', Auth::user()->nik)->get();

        abort_if($users->count() == 0, 404);
        $status_syllabuses = RequestSyllabusStatus::all('id', 'name');
        return view('LearningDesign.LearningNeedAnalysis.UserNeeds.RequestSyllabus.index', compact('status_syllabuses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jobFamilies = JobFamily::where('level', 0)->get();

        $competencies = PrfCompetencyCatalog::where('status', 1)->orderBy('name')->get(['id', 'name']);
        $vendors = Vendor::all('id', 'partner_name')->sortBy('partner_name');
        $levels = Level::all('id', 'name')->sortBy('name');
        $statuses = Status::all('id', 'name')->sortBy('name');
        $units = OrganizationUnit::all('id', 'name')->sortBy('name');
        $locations = Location::all('id', 'name')->sortBy('name');
        return view(
            'LearningDesign.LearningNeedAnalysis.UserNeeds.RequestSyllabus.create',
            compact('jobFamilies', 'competencies', 'vendors', 'levels', 'statuses', 'units', 'locations')
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequestSyllabus $request, SyllabusService $service)
    {
        if (empty($request->sub_job_family)) {
            $syllabus = $service->storeRequestSyllabusJf(
                $request->training_name,
                $request->training_summary,
                $request->training_background,
                $request->training_description,
                $request->learning_scope,
                $request->skills_will_you_gain,
                $request->level,
                $request->status,
                $request->lokasi_kerja,
                $request->partner_recommendation,
                $request->unit,
                $request->job_family,
            );
        } else {
            $syllabus = $service->storeRequestSyllabusJf(
                $request->training_name,
                $request->training_summary,
                $request->training_background,
                $request->training_description,
                $request->learning_scope,
                $request->skills_will_you_gain,
                $request->level,
                $request->status,
                $request->lokasi_kerja,
                $request->partner_recommendation,
                $request->unit,
                $request->sub_job_family,
            );
        }

        toast('Syllabus Successfully Requested', 'success');

        // $atasan = auth()->user()->atasanUser;
        // Notification::send($atasan, new SyllabusCreate($syllabus->id));

        return redirect()->route('learning-design.learning-need-analysis.request-syllabuses.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $syllabus = RequestSyllabus::findOrFail($id);

        $activities  = Activity::with('subject', 'causer')->where('subject_type', 'App\Models\RequestSyllabus')
        ->where('subject_id', $syllabus->id)
        ->orderBy('created_at')
        ->get();
        $cart_user_needs = Cart::instance('user-needs')->content();

        return view(
            'LearningDesign.LearningNeedAnalysis.UserNeeds.RequestSyllabus.show',
            compact('syllabus', 'activities', 'cart_user_needs')
        );
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

        foreach ($request_syllabus->levels as $request_syllabus_level) {
            $request_syllabus_levels[] = $request_syllabus_level->id;
        }
        foreach ($request_syllabus->statuses as $request_syllabus_status) {
            $request_syllabus_statuses[] = $request_syllabus_status->id;
        }

        foreach ($request_syllabus->units as $request_syllabus_unit) {
            $request_syllabus_units[] = $request_syllabus_unit->id;
        }

        foreach ($request_syllabus->locations as $request_syllabus_location) {
            $request_syllabus_locations[] = $request_syllabus_location->id;
        }

        foreach ($request_syllabus->competencies as $request_syllabus_competency) {
            $request_syllabus_competencies[] = $request_syllabus_competency->id;
        }

        foreach ($request_syllabus->vendors as $request_syllabus_vendor) {
            $request_syllabus_vendors[] = $request_syllabus_vendor->id;
        }

        $jobFamilies = JobFamily::with('jobFamilySubJobFamily')->where('level', 0)->get();

        $competencies = PrfCompetencyCatalog::where('status', 1)->orderBy('name')->get(['id', 'name']);
        $vendors = Vendor::all('id', 'partner_name')->sortBy('partner_name');
        $levels = Level::all('id', 'name')->sortBy('name');
        $statuses = Status::all('id', 'name')->sortBy('name');
        $units = OrganizationUnit::all('id', 'name')->sortBy('name');
        $locations = Location::all('id', 'name')->sortBy('name');
        return view(
            'LearningDesign.LearningNeedAnalysis.UserNeeds.RequestSyllabus.edit',
            compact(
                'request_syllabus',
                'jobFamilies',
                'competencies',
                'vendors',
                'levels',
                'statuses',
                'units',
                'locations',
                'request_syllabus_levels',
                'request_syllabus_statuses',
                'request_syllabus_units',
                'request_syllabus_locations',
                'request_syllabus_competencies',
                'request_syllabus_vendors'
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
    public function update(UpdateRequestSyllabus $request, SyllabusService $service, $id)
    {
        $syllabus = RequestSyllabus::findOrFail($id);
        if (empty($request->sub_job_family)) {
             $service->updateRequestSyllabusJf(
                 $request->training_name,
                 $request->training_summary,
                 $request->training_background,
                 $request->training_description,
                 $request->learning_scope,
                 $request->skills_will_you_gain,
                 $request->level,
                 $request->status,
                 $request->lokasi_kerja,
                 $request->partner_recommendation,
                 $request->unit,
                 $request->job_family,
                 $syllabus
             );
        } else {
             $service->updateRequestSyllabusJf(
                 $request->training_name,
                 $request->training_summary,
                 $request->training_background,
                 $request->training_description,
                 $request->learning_scope,
                 $request->skills_will_you_gain,
                 $request->level,
                 $request->status,
                 $request->lokasi_kerja,
                 $request->partner_recommendation,
                 $request->unit,
                 $request->sub_job_family,
                 $syllabus
             );
        }

        toast('Syllabus Successfully Updated', 'success');
        return redirect()->route('learning-design.learning-need-analysis.request-syllabuses.edit', [$syllabus]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $request_syllabus = RequestSyllabus::findOrFail($id);
        abort_if($request_syllabus->status_id != 3, 403);

        $request_syllabus->delete();

        toast('Request Syllabus Successfully Deleted', 'success');

        return redirect()->route('learning-design.learning-need-analysis.request-syllabuses.index');
    }

    public function atasanRequestSyllabus()
    {
        $model = RequestSyllabus::with('syllabusJobFamily', 'syllabusStatus')
        ->where('request_syllabuses.created_by', Auth::user()->id)->latest()->select('request_syllabuses.*');

        return Datatables::of($model)
            ->editColumn('job_family_name', static function ($model) {
                return $model->syllabusJobFamily->name;
            })
            ->editColumn('level_description', static function ($model) {
                return $model->syllabusJobFamily->level_description;
            })
                ->editColumn('status_id', static function ($model) {
                    if ($model->status_id == 1) {
                        return '<span class="badge badge-pill badge-info">'.$model->syllabusStatus->name.'</span>';
                    } elseif ($model->status_id == 2) {
                        return '<span class="badge badge-pill badge-success">'.$model->syllabusStatus->name.'</span>';
                    } elseif ($model->status_id == 3) {
                        return '<span class="badge badge-pill badge-warning">'.$model->syllabusStatus->name.'</span>';
                    } elseif ($model->status_id == 4) {
                        return '<span class="badge badge-pill badge-danger">'.$model->syllabusStatus->name.'</span>';
                    } elseif ($model->status_id == 5) {
                        return '<span class="badge badge-pill badge-danger">'.$model->syllabusStatus->name.'</span>';
                    } else {
                        return '<span class="badge badge-pill badge-muted">Unknown Status</span>';
                    }
                })
                ->addColumn('action', static function ($model) {
                    return view('LearningDesign.LearningNeedAnalysis.UserNeeds.RequestSyllabus.Datatable.action', compact('model'));
                })->editColumn('created_at', static function ($model) {
                    return Carbon::parse($model->created_at)->format('d F Y');
                })
            ->rawColumns(['status_id', 'action'])
            ->toJson();
    }
}
