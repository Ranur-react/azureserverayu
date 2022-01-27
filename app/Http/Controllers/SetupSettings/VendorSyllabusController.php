<?php

namespace App\Http\Controllers\SetupSettings;

use App\Http\Controllers\Controller;
use App\Models\Competency;
use App\Models\JobFamily;
use App\Models\Syllabus;
use App\Models\SyllabusStatus;
use App\Models\Vendor;
use DB;
use DataTables;
use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;

class VendorSyllabusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Vendor $vendor)
    {
        $this->authorize('vendor_access');

        $status_syllabuses = SyllabusStatus::all('id','name');

        return view('SetupSettings.Vendor.Syllabus.index', compact('vendor', 'status_syllabuses'));
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
    public function show(Vendor $vendor, Syllabus $syllabus)
    {
        if (! $vendor->syllabuses->where('id','=',$syllabus->id)->first()) {
            abort(404);
        }

        $activities  = Activity::with('causer')->where('subject_type', 'App\Models\Syllabus')
            ->where('subject_id', $syllabus->id)
            ->get();

        return view('Setup.Vendor.Syllabus.show', compact('vendor', 'syllabus', 'activities'));
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
    public function update(Request $request, Vendor $vendor, Syllabus $syllabus)
    {
        $this->authorize('learning_syllabus_approve');
        if (! $vendor->syllabuses->where('id','=',$syllabus->id)->first()) {
            abort(404);
        }
        $syllabus->update([
            'syllabus_code' => $request->syllabus_code,
            'number' => $request->number,
            'is_approved' => '1',
            'is_active' => '1',
        ]);

        return redirect()->route('setup-settings.vendors.index');

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

    public function reject(Request $request, Vendor $vendor, Syllabus $syllabus)
    {
        $this->authorize('learning_syllabus_approve');
        if (! $vendor->syllabuses->where('id','=',$syllabus->id)->first()) {
            abort(404);
        }
        $syllabus->update([
            'syllabus_code' => $request->syllabus_code,
            'number' => $request->number,
            'is_approved' => '1',
            'is_active' => '1',
        ]);

        return redirect()->route('setup-settings.vendors.index');
    }

    public function getAjaxVendorSyllabuses(Vendor $vendor)
    {
        $model = DB::table('syllabus_vendor')
        ->join('vendors', 'syllabus_vendor.vendor_id', '=', 'vendors.id')
        ->join('syllabuses', 'syllabus_vendor.syllabus_id', '=', 'syllabuses.id')
        ->join('syllabuses_statuses', 'syllabuses.status_id', '=', 'syllabuses_statuses.id')
        ->where('vendor_id', $vendor->id)
        ->where('syllabuses.deleted_at', NULL)
        ->orderBy('syllabuses.training_name', 'asc')
        ->select(['syllabuses.id as syllabus_id', 'syllabuses.syllabus_code', 'syllabuses.training_name','syllabuses_statuses.name as status_name',
        'syllabuses_statuses.id as status_id']);

        return Datatables::of($model)
            ->editColumn('status_name', static function ($model) {
                if($model->status_id == 3){
                    return '<span class="badge badge-pill badge-warning">'.$model->status_name.'</span>';
                }
                if($model->status_id == 1){
                    return '<span class="badge badge-pill badge-success">'.$model->status_name.'</span>';
                }if($model->status_id == 2){
                    return '<span class="badge badge-pill badge-muted">'.$model->status_name.'</span>';
                } if($model->status_id == 4){
                    return '<span class="badge badge-pill badge-danger">'.$model->status_name.'</span>';
                }   
            })
            ->editColumn('training_name', function ($model) {
                return '<a href="'.route('api.v1.syllabuses-ajax.show', $model->syllabus_id).'" class="pe-auto modal-global">'.$model->training_name.'</a>';
            })->rawColumns(['training_name', 'status_name'])
            ->toJson();
    }
}
