<?php

namespace App\Http\Controllers\LearningNeedAnalysis;

use App\Http\Controllers\Controller;
use App\Http\Requests\LearningAdmin\Store\StoreIdpPeriodRequest;
use App\Http\Requests\LearningAdmin\Store\StoreIdpRequest;
use App\Models\Competency;
use App\Models\Employee;
use App\Models\IdpPeriod;
use App\Models\Idp;
use App\Models\PrfCompetencyCatalog;
use App\Models\User;
use App\Notifications\IDPCreate;
use Auth;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use DataTables;
use Notification;

class IdpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::where('nik_atasan', Auth::user()->employee->nik)->get();

        abort_if($employees->count() == 0, 404);
     
        return view(
            'LearningNeedAnalysis.IDP.index',
            compact('employees')
        );
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
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employee = Employee::findOrFail($request->nik);
        $idpPeriod = IdpPeriod::findOrFail($request->idp_period_id);
        $user = User::where('nik', $employee->nik)->firstOrFail();
        $cart = Cart::instance('idp' . $employee->nik . $idpPeriod->id)->content();
        if (Carbon::today()->between($idpPeriod->start_date, $idpPeriod->end_date)) {
            DB::transaction(function () use ($cart, $request, $employee, $idpPeriod, $user) {
                $idp = Idp::create([
                    'idp_period_id' => $idpPeriod->id,
                    'nik' => $employee->nik,
                ]);

                if (is_null($request->test)) {
                    $i = 0;
                    foreach ($cart as $row) {
                        $idp->syllabuses()->attach($row->id, ['priority' => ++$i]);
                    }
                }
                if (!is_null($request->test)) {
                    $b = 0;
                    foreach (explode(',', $request->test) as $myArray) {
                        $idp->syllabuses()->attach($myArray, ['priority' => ++$b]);
                    }
                }
                foreach ($cart as $delete) {
                    Cart::instance('idp' . $employee->nik . $idpPeriod->id)->remove($delete->rowId);
                }
                Notification::send($user, new IDPCreate($idp->id));
            });
        } else {
            abort(403);
        }
        toast('Idp Created Successfully', 'success');

        return redirect()->route('learning-need-analysis.idp.show', $employee->nik);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = Employee::findOrFail($id);

        if ($employee->nik_atasan != auth()->user()->employee->nik) {
            abort(404);
        }
        $idpUser = Idp::with('idpPeriod')
        ->where('nik', $employee->nik)->get();

        $idp = IdpPeriod::with('idp');
        foreach ($idpUser as $value) {
            $idp->where("id", '!=', $value->idp_period_id);
        }
        $results = $idp->get();

        return view(
            'LearningNeedAnalysis.IDP.Karyawan.show',
            compact('employee', 'idpUser', 'results')
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
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function destroyIdp($nik, $idp_user_id)
    {
        $employee = Employee::findOrFail($nik);

        $idp_user = Idp::findOrFail($idp_user_id);

        if ($employee->nik_atasan != auth()->user()->employee->nik) {
            abort(403);
        }
        if (Carbon::today()->between($idp_user->idpPeriod->start_date, $idp_user->idpPeriod->end_date)) {
            $idp_user->delete();
        } else {
            abort(403);
        }

        toast('Idp Deleted Successfully', 'success');

        return redirect()->route('learning-need-analysis.idp.show', $employee->nik);
    }

    public function detail($nik, $idp_user_id)
    {
        $employee = Employee::findOrFail($nik);

        if ($employee->nik_atasan != auth()->user()->employee->nik) {
            abort(404);
        }

        $idp_user = Idp::with('idpPeriod', 'syllabuses', 'syllabuses.prfCompetencyCatalog')
        ->findOrFail($idp_user_id);

        abort_if($idp_user->nik != $employee->nik, 404);

        return view(
            'LearningNeedAnalysis.IDP.Karyawan.Detail.show',
            compact('employee', 'idp_user')
        );
    }

    public function createIdp($nik, $idp_period_id)
    {
        $employee = Employee::findOrFail($nik);
        $idpPeriod = IdpPeriod::findOrFail($idp_period_id);

        //check atasan id hanya bisa mengakses bawahannya
        if ($employee->nik_atasan != auth()->user()->employee->nik) {
            abort(404);
        }
        //check apakah idp period masih aktif
        if (!Carbon::today()->between($idpPeriod->start_date, $idpPeriod->end_date)) {
            abort(404);
        }

        //check apakah idp period sudah ada di table idp
        $idpUser = Idp::with('idpPeriod')->where('nik', $employee)->get();
        foreach ($idpUser as $value) {
            if ($value->idp_period_id == $idp_period_id) {
                abort(404);
            }
        }

        $cart_idp = Cart::instance('idp'.$employee->nik.$idp_period_id)->content();

        return view(
            'LearningNeedAnalysis.IDP.Karyawan.Detail.create',
            compact('employee', 'idpPeriod', 'cart_idp')
        );
    }

    public function showIdpSyllabus(Request $request)
    {
        $nik = $request->nik;
        $idp_period_id = $request->idp_period_id;
        $cart_idp = Cart::instance('idp'.$nik.$idp_period_id)->content();
        $employee = Employee::findOrFail($nik);
        
        // $model = PrfCompetencyCatalog::with(['syllabuses' => function ($query) {
        //         return $query->where('status_id', 1);}
        //     ])->whereHas('prfCompetencyRequirements', function ($query) {
        //         return $query->where('status_id', 1);
        //     })
        //     ->whereHas('syllabuses', function ($query) {
        //         return $query->where('status_id', 1);
        //     })->select('prf_competency_catalog.*');

            
        $model = PrfCompetencyCatalog::with('syllabuses')
            ->whereHas('prfCompetencyRequirements', function ($query) use($employee) {
                return $query->where('position_id', $employee->position_id);
            })
           ->select('prf_competency_catalog.*');


        return Datatables::of($model)
            ->addColumn('competencies', function (PrfCompetencyCatalog $prfCompetencyCatalog) use ($cart_idp, $nik, $idp_period_id) {
                return view('LearningNeedAnalysis.IDP.Karyawan.Detail.ajax-syllabus', compact('nik', 'idp_period_id', 'prfCompetencyCatalog', 'cart_idp'));
            })->rawColumns(['competencies'])
            ->toJson();
    }
}
