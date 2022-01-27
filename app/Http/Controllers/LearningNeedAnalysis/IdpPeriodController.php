<?php

namespace App\Http\Controllers\LearningNeedAnalysis;

use App\Http\Controllers\Controller;
use App\Models\IdpPeriod;
use App\Http\Requests\LearningAdmin\Store\StoreIdpPeriodRequest;
use App\Http\Requests\LearningAdmin\Update\UpdateIdpRequest;
use App\Models\Employee;
use App\Models\Syllabus;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Auth;
use DB;
use DataTables;


class IdpPeriodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('idp_period_access');

        $idp = IdpPeriod::all();

        return view(
            'LearningNeedAnalysis.IDPPeriod.index',
            compact('idp')
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
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIdpPeriodRequest $request)
    {
        IdpPeriod::create($request->validated());

        toast('Idp Period Created Successfully', 'success');

        return redirect()->route('learning-need-analysis.idp-period.index');
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
        $this->authorize('idp_period_edit');
        
        $idp = IdpPeriod::findOrFail($id);

        // $start_date = Carbon::createFromFormat('Y-m-d', $idp['start_date'])->format('m/d/Y');
        // $end_date = Carbon::createFromFormat('Y-m-d', $idp['end_date'])->format('m/d/Y');

        return view('LearningNeedAnalysis.IDPPeriod.edit', compact('idp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIdpRequest $request, $id)
    {
        $idp = IdpPeriod::findOrFail($id);

        $idp->update($request->validated());

        toast('Idp Period Updated Successfully', 'success');

        return redirect()->route('learning-need-analysis.idp-period.edit', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('idp_period_delete');

        $idp = IdpPeriod::findOrFail($id);

        $idp->delete();

        return redirect()->route('learning-need-analysis.idp-period.index')
            ->with('delete_idp_message_success', 
            'Idp Period deleted successfully. 
            <a href="' . route('learning-need-analysis.idp-period.restore', $id) . '" class="alert-link"> Whoops, Undo</a>');
    }

    public function restore(int $idp_id)
    {
        $this->authorize('idp_period_edit');
        $idp = IdpPeriod::withTrashed()->findOrFail($idp_id);
        if ($idp && $idp->trashed()) {
            $idp->restore();
        }

        toast('Idp Restored Successfully', 'success');

        return redirect()->route('learning-need-analysis.idp-period.index');
    }


    public function restoreArchive(Request $request)
    {
        $this->authorize('idp_period_edit');
        $validated = $request->validate([
            'idp_period_id.*' =>  [
                'required',
                'numeric',
                'distinct',
                'exists:idp_period,id',
            ],
        ]);

        IdpPeriod::onlyTrashed()
            ->whereIn('id', $request->idp_period_id)
            ->restore();

        toast('IDP Period Restored Successfully', 'success');
    }

    public function forceDelete(Request $request)
    {
        $this->authorize('idp_period_delete');
        $validated = $request->validate([
            'idp_period_id.*' =>  [
                'required',
                'numeric',
                'distinct',
                'exists:idp_period,id',
            ],
        ]);

        IdpPeriod::onlyTrashed()
            ->whereIn('id', $request->idp_period_id)
            ->forceDelete();

        toast('IDP Period Deleted Successfully', 'success');
    }

    public function archive()
    {
        $this->authorize('idp_period_access');
        $idp = IdpPeriod::onlyTrashed()->get();

        return view('LearningNeedAnalysis.IDPPeriod.Archive.index', compact('idp'));
    }

    
}
