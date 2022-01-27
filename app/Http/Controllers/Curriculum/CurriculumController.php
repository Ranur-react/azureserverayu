<?php

namespace App\Http\Controllers\Curriculum;

use App\Http\Controllers\Controller;
use App\Http\Requests\LearningAdmin\Store\StoreKurikulumRequest;
use App\Models\Csp;
use App\Models\Curriculum;
use App\Models\IdpPeriod;
use App\Models\Kurikulum;
use App\Models\Syllabus;
use App\Models\User;
use App\Notifications\CurriculumCreate;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Notification;
use Spatie\Period\Period;
use DataTables;

class CurriculumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('curriculum_access');

        // $a = Period::make('2021-01-01', '2021-02-01');
        // $b = Period::make('2021-02-01', '2021-02-28');

        // // true

        // dd($a->overlapsWith($b));

        $curriculum = Curriculum::with('curriculumStatus')->get();
        return view('Curriculum.index', compact('curriculum'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('curriculum_create');

        $csp = DB::table('csp_syllabus')
        ->join('csp', 'csp_syllabus.csp_id', '=', 'csp.id')
        ->join('syllabuses', 'csp_syllabus.syllabus_id', '=', 'syllabuses.id')
        ->join('job_families', 'syllabuses.job_family_id', '=', 'job_families.id')
        ->select(
            'csp.*',
            'csp.name',
            'csp.start_date',
            'syllabuses.id',
            'syllabuses.syllabus_code',
            'syllabuses.training_name',
            'job_families.name as jobFamilyName',
        )->where('csp.deleted_at', '=', NULL)
        ->whereDate('csp.start_date', '<=', today())
        ->whereDate('csp.end_date', '>=', today())
        ->get();

        $idp = DB::table('idp_syllabus')
        ->join('idp', 'idp_syllabus.idp_id', '=', 'idp.id')
        ->join('syllabuses', 'idp_syllabus.syllabus_id', '=', 'syllabuses.id')
        ->join('idp_period', 'idp.idp_period_id', '=', 'idp_period.id')
        ->join('job_families', 'syllabuses.job_family_id', '=', 'job_families.id')
        ->select(
            'idp_syllabus.*',
            DB::raw('COUNT(syllabus_id) as count'),
            'syllabuses.syllabus_code',
            'syllabuses.training_name',
            'syllabuses.id',
            'idp_period.id as idp_id',
            'idp_period.name as idp_period_name',
            'idp_period.start_date',
            'job_families.name as jobFamilyName',
        )->where('idp_period.deleted_at', '=', NULL)
        ->whereDate('idp_period.start_date', '<=', today())
        ->whereDate('idp_period.end_date', '>=', today())
        ->groupBy('syllabus_id')
        ->orderBy('count', 'desc')
        ->get();

        $idp_priority_1 = DB::table('idp_syllabus')
        ->join('idp', 'idp_syllabus.idp_id', '=', 'idp.id')
        ->join('syllabuses', 'idp_syllabus.syllabus_id', '=', 'syllabuses.id')
        ->join('idp_period', 'idp.idp_period_id', '=', 'idp_period.id')
        ->join('job_families', 'syllabuses.job_family_id', '=', 'job_families.id')
        ->select(
            'idp_syllabus.*',
            DB::raw('COUNT(syllabus_id) as count'),
            'syllabuses.syllabus_code',
            'syllabuses.training_name',
            'syllabuses.id',
            'idp_period.id as idp_id',
            'idp_period.name as idp_period_name',
            'idp_period.start_date',
            'job_families.name as jobFamilyName',
        )->whereDate('idp_period.start_date', '<=', today())
        ->whereDate('idp_period.end_date', '>=', today())
        ->groupBy('syllabus_id')
        ->where('idp_syllabus.priority', '=', 1)
        ->groupBy('syllabus_id')
        ->orderBy('count', 'desc')
        ->get();

        return view('Curriculum.create', compact('csp', 'idp', 'idp_priority_1'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKurikulumRequest $request)
    {
        $curriculum_now = Curriculum::where('status_id', 1)
        ->whereDate('start_date', '<=', today())
        ->whereDate('csp.end_date', '>=', today())->get();

        if($curriculum_now->count() == 0){
            $curriculum =  Curriculum::create([
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'status_id' => 3,
            ]);
    
            $curriculum->syllabuses()->attach($request->syllabus_selected);
    
            $atasan = User::where('nik', Auth::user()->employee->nik_atasan)->first();
            Notification::send($atasan, new CurriculumCreate($curriculum));
    
            toast('Curriculum Successfully Created', 'success');
    
            return redirect()->route('curriculum.index');
        }else{
            return redirect()->back()->with('error', 'your message,here');   
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function destroy(Curriculum $curriculum)
    {
        $this->authorize('curriculum_delete');

        $curriculum->delete();

        return redirect()->route('curriculum.index')
            ->with('delete_curriculum_message_success', 'Curriculum deleted successfully. <a href="'.route('curriculum.restore', $curriculum). '" class="alert-link"> Whoops, Undo</a>');
    }

    public function restore(int $curriculum_id)
    {
        $this->authorize('curriculum_edit');

        $curriculum = Curriculum::withTrashed()->findOrFail($curriculum_id);
        if ($curriculum && $curriculum->trashed()) {
            $curriculum->restore();
        }

        toast('Curriculum Restored Successfully', 'success');

        return redirect()->route('curriculum.index');
    }

    public function restoreArchive(Request $request)
    {
        $this->authorize('curriculum_edit');

        $validated = $request->validate([
            'curriculum_id.*' =>  [
                'required',
                'numeric',
                'distinct',
                'exists:curriculum,id',
            ],
        ]);

        Curriculum::onlyTrashed()
            ->whereIn('id', $request->curriculum_id)
            ->restore();

        toast('Curriculum Restored Successfully', 'success');
    }


    public function forceDelete(Request $request)
    {
        $this->authorize('curriculum_delete');

        $validated = $request->validate([
            'curriculum_id.*' =>  [
                'required',
                'numeric',
                'distinct',
                'exists:curriculum,id',
            ],
        ]);

        Curriculum::onlyTrashed()
            ->whereIn('id', $request->curriculum_id)
            ->forceDelete();

        toast('Curriculum Deleted Successfully', 'success');
    }

    public function archive()
    {
        $this->authorize('curriculum_access');
        $curriculum = Curriculum::with('curriculumStatus')->onlyTrashed()->get();
        return view('Curriculum.Archive.index', compact('curriculum'));
    }

    public function getIdpEmployee(IdpPeriod $idpPeriod, Syllabus $syllabus)
    {
        $this->authorize('idp_period_access');
        
        $query = DB::table('idp_syllabus')
        ->join('idp', 'idp_syllabus.idp_id', '=', 'idp.id')
            ->join('employee', 'idp.nik', '=', 'employee.nik')
            ->join('idp_period', 'idp.idp_period_id', '=', 'idp_period.id')
            ->where('syllabus_id', $syllabus->id)
            ->where('idp_period.id', $idpPeriod->id)
            ->orderBy('idp_syllabus.priority', 'asc')
            ->select(['idp_syllabus.idp_id', 'idp_syllabus.priority','idp_period.start_date',
                'employee.nik', 'employee.name', 'employee.title', 'employee.division']);

        return Datatables::of($query)
            ->toJson();
    }

    public function getIdpEmployeePriority1(IdpPeriod $idpPeriod, Syllabus $syllabus)
    {

        $this->authorize('idp_period_access');
        
        $query = DB::table('idp_syllabus')
        ->join('idp', 'idp_syllabus.idp_id', '=', 'idp.id')
            ->join('employee', 'idp.nik', '=', 'employee.nik')
            ->join('idp_period', 'idp.idp_period_id', '=', 'idp_period.id')
            ->where('syllabus_id', $syllabus->id)
            ->where('idp_syllabus.priority', 1)
            ->where('idp_period.id', $idpPeriod->id)
            ->orderBy('idp_syllabus.priority', 'asc')
            ->select(['idp_syllabus.idp_id', 'idp_syllabus.priority','idp_period.name As period_name', 'idp_period.start_date',
                'employee.nik', 'employee.name', 'employee.title', 'employee.division']);

        return Datatables::of($query)
            ->toJson();
    }
}
