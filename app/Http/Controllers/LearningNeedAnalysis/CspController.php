<?php

namespace App\Http\Controllers\LearningNeedAnalysis;

use App\Http\Controllers\Controller;
use App\Http\Requests\LearningAdmin\Store\StoreCspPeriodRequest;
use App\Http\Requests\LearningAdmin\Store\StoreCspSyllabusRequest;
use App\Http\Requests\LearningAdmin\Update\UpdateCspRequest;
use App\Http\Requests\LearningAdmin\Update\UpdateCspSyllabusRequest;
use App\Models\Csp;
use App\Models\CspPeriod;
use App\Models\Kurikulum;
use App\Models\Syllabus;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use DataTables;
use Illuminate\Validation\Rule;

class CspController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('csp_access');

        // $syllabuses = Syllabus::with('competencies', 'syllabusJobFamily')->where([
        //     ['is_approved', 1],
        //     ['is_active', 1],
        // ])->get();

        // $cart = Cart::instance('csp')->content();
        $csp = Csp::with('syllabuses')->get();
        return view('LearningNeedAnalysis.CSP.index', compact('csp'));
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
    public function store(StoreCspPeriodRequest $request)
    {
        // $syllabus_array = explode(',', $request->syllabusId);
        $csp = Csp::create($request->validated());
        $csp->syllabuses()->attach($request->syllabusId);

        toast('Csp Added Successfully', 'success');

        return redirect()->route('learning-need-analysis.csp.index');
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
        $csp = Csp::findOrFail($id);
        // $start_date = Carbon::createFromFormat('Y-m-d', $csp['start_date'])->format('F j, Y');
        // $end_date = Carbon::createFromFormat('Y-m-d', $csp['end_date'])->format('F j, Y');
        return view('LearningNeedAnalysis.CSP.edit', compact('csp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCspRequest $request, $id)
    {
        $csp = Csp::findOrFail($id);

        $csp->update($request->validated());

        toast('Csp Period Updated Successfully', 'success');

        return redirect()->route('learning-need-analysis.csp.edit', $csp);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('csp_delete');
        $csp = Csp::findOrFail($id);

        $csp->delete();

        return redirect()->route('learning-need-analysis.csp.index')
            ->with('delete_csp_message_success', 'Csp Period deleted successfully. <a href="' . route('learning-need-analysis.csp.restore', $id) . '" class="alert-link"> Whoops, Undo</a>');
    }

    public function restore(int $csp_id)
    {
        $this->authorize('csp_edit');
        $csp = Csp::withTrashed()->findOrFail($csp_id);
        if ($csp && $csp->trashed()) {
            $csp->restore();
        }

        toast('Csp Restored Successfully', 'success');

        return redirect()->route('learning-need-analysis.csp.index');
    }

    public function restoreArchive(Request $request)
    {
        $this->authorize('csp_edit');

        $validated = $request->validate([
            'csp_id.*' =>  [
                'required',
                'numeric',
                'distinct',
                'exists:csp,id',
            ],
        ]);

        Csp::onlyTrashed()
            ->whereIn('id', $request->csp_id)
            ->restore();

        toast('Csp Restored Successfully', 'success');
    }

    public function forceDelete(Request $request)
    {
        $this->authorize('csp_delete');

        $validated = $request->validate([
            'csp_id.*' =>  [
                'required',
                'numeric',
                'distinct',
                'exists:csp,id',
            ],
        ]);

        Csp::onlyTrashed()
            ->whereIn('id', $request->csp_id)
            ->forceDelete();

        toast('Csp Deleted Successfully', 'success');
    }

    public function editCspSyllabuses($id)
    {
        $this->authorize('csp_edit');

        $syllabuses = Syllabus::with(
            'prfCompetencyCatalog',
            'syllabusJobFamily'
        )->where([
            'status_id' => 1
        ])->get();

        $csp_id = Csp::findOrFail($id);

        return view('LearningNeedAnalysis.CSP.Syllabus.edit', compact('csp_id', 'syllabuses'));
    }

    public function storeCspSyllabuses(StoreCspSyllabusRequest $request, $id): \Illuminate\Http\RedirectResponse
    {
        $this->authorize('csp_edit');
        
        $csp = Csp::findOrFail($id);

        foreach ($request->syllabus as $row) {
            $csp->syllabuses()->attach($row['id']);
        }

        toast('Csp Syllabus Added Successfully', 'success');

        return redirect()->route(
            'learning-need-analysis.csp.syllabuses.editCspSyllabuses',
            $id
        );
    }

    public function destroyCspSyllabuses(Request $request, $id): \Illuminate\Http\RedirectResponse
    {
        $this->authorize('csp_edit');

        $validated = $request->validate([
            "syllabus" => "required|array",
            'syllabus.*.id' =>  [
                'required',
                'numeric',
                'distinct',
                'exists:syllabuses,id',
            ],
        ]);

        $csp = Csp::findOrFail($id);

        foreach ($request->syllabus as $row) {
            $csp->syllabuses()->detach($row['id']);
        }

        toast('Csp Syllabus Deleted Successfully', 'success');

        return redirect()->route('learning-need-analysis.csp.syllabuses.editCspSyllabuses', $id);
    }

    public function archive()
    {
        $this->authorize('csp_access');
        $csp = Csp::onlyTrashed()->get();

        return view('LearningNeedAnalysis.CSP.Archive.index', compact('csp'));
    }

    public function getAjaxSyllabus()
    {
        $this->authorize('csp_access');

        $model = Syllabus::with('prfCompetencyCatalog')
            ->where('status_id', 1)
            ->select('syllabuses.*');

        return Datatables::of($model)
            ->addColumn('prfCompetencyCatalog', function (Syllabus $syllabus) {
                return $syllabus->prfCompetencyCatalog->map(function ($prfCompetencyCatalog) {
                    return $prfCompetencyCatalog->name;
                })->implode('<br>');
            })->editColumn('training_name', function ($model) {
                return '<a href="'.route('api.v1.syllabuses-ajax.show', $model->id).'" class="pe-auto modal-global">
                    <div class="text-wrap" style="width: 16rem;">
                    '.$model->training_name.'
                    </div>
                </a>';
            })->editColumn('training_summary', function ($model) {
                return '<div class="text-wrap" style="width: 20rem;">'.$model->training_summary.'</div>';
            })
            ->rawColumns(['prfCompetencyCatalog','training_name', 'training_summary'])
            ->toJson();
    }

    public function getCspSyllabuses($id)
    {
        $this->authorize('csp_edit');

        $csp_array_id = [];

        $csp = Csp::findOrFail($id);

        foreach ($csp->syllabuses as $csp_syllabus) {
            $csp_array_id[] = $csp_syllabus->id;
        }

        $model = Syllabus::whereIn('syllabuses.id', $csp_array_id)
        ->with(['prfCompetencyCatalog', 'csp'])
        ->where('status_id', 1)
        ->select('syllabuses.*');

        return Datatables::of($model)
            ->addColumn('prfCompetencyCatalog', function (Syllabus $syllabus) {
                return $syllabus->prfCompetencyCatalog->map(function ($prfCompetencyCatalog) {
                    return $prfCompetencyCatalog->name;
                })->implode('<br>');
            })->editColumn('training_name', function ($model) {
                return '<a href="'.route('api.v1.syllabuses-ajax.show', $model->id).'" class="pe-auto modal-global">
                    <div class="text-wrap" style="width: 16rem;">
                    '.$model->training_name.'
                    </div>
                </a>';
            })->editColumn('training_summary', function ($model) {
                return '<div class="text-wrap" style="width: 20rem;">'.$model->training_summary.'</div>';
            })
            ->rawColumns(['prfCompetencyCatalog','training_name', 'training_summary'])
            ->toJson();
    }

    public function getNotCspSyllabuses($id)
    {
        $this->authorize('csp_edit');

        $csp_array_id = [];

        $csp = Csp::findOrFail($id);

        foreach ($csp->syllabuses as $csp_syllabus) {
            $csp_array_id[] = $csp_syllabus->id;
        }

        $model = Syllabus::whereNotIn('syllabuses.id', $csp_array_id)
        ->with(['prfCompetencyCatalog', 'csp'])
        ->where('status_id', 1)
        ->select('syllabuses.*');

        return Datatables::of($model)
            ->addColumn('prfCompetencyCatalog', function (Syllabus $syllabus) {
                return $syllabus->prfCompetencyCatalog->map(function ($prfCompetencyCatalog) {
                    return $prfCompetencyCatalog->name;
                })->implode('<br>');
            })->editColumn('training_name', function ($model) {
                return '<a href="'.route('api.v1.syllabuses-ajax.show', $model->id).'" class="pe-auto modal-global">
                    <div class="text-wrap" style="width: 16rem;">
                    '.$model->training_name.'
                    </div>
                </a>';
            })->editColumn('training_summary', function ($model) {
                return '<div class="text-wrap" style="width: 20rem;">'.$model->training_summary.'</div>';
            })
            ->rawColumns(['prfCompetencyCatalog','training_name', 'training_summary'])
            ->toJson();
    }
}
