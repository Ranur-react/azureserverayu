<?php

namespace App\Http\Controllers\MasterData;

use App\Exports\OrganizationUnitExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\LearningAdmin\Store\StoreOrganizationUnitRequest;
use App\Http\Requests\LearningAdmin\Update\UpdateOrganizationUnitRequest;
use App\Imports\OrganizationUnitImport;
use App\Models\OrganizationUnit;
use DB;
use DataTables;
use Auth;
use Carbon\Carbon;
use Excel;
use Illuminate\Http\Request;
use Storage;

class OrganizationUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('master_data_access');

        return view('MasterData.OrganizationUnit.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('master_data_create');

        return view('MasterData.OrganizationUnit.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrganizationUnitRequest $request)
    {
        OrganizationUnit::create([
            'location_id' => $request->location_id,
            'date_from' => $request->date_from,
            'date_to' => $request->date_to,
            'name' => $request->name,
            'internal_external_flag' => "INT",
            'type' => $request->type,
        ]);

        toast('Unit Successfully Created', 'success');

        return redirect()->route('master-data.organization-units.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(OrganizationUnit $organizationUnit)
    {
        $this->authorize('master_data_show');

        return view('MasterData.OrganizationUnit.show', compact('organizationUnit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(OrganizationUnit $organizationUnit)
    {
        $this->authorize('master_data_edit');

        return view('MasterData.OrganizationUnit.edit', compact('organizationUnit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrganizationUnitRequest $request, OrganizationUnit $organizationUnit)
    {
        $organizationUnit->update($request->validated([
            'location_id' => $request->location_id,
            'date_from' => $request->date_from,
            'date_to' => $request->date_to,
            'name' => $request->name,
            'type' => $request->type,
        ]));

        toast('Unit Successfully Updated', 'success');

        return redirect()->route('master-data.organization-units.edit', $organizationUnit);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrganizationUnit $organizationUnit)
    {
        $this->authorize('master_data_delete');

        $organizationUnit->delete();

        toast('Unit Successfully Deleted', 'success');

        return redirect()->back();
    }

    public function getselect2LocationAjax(Request $request)
    {
        abort_if(! Auth::user()->hasAnyPermission([
            'master_data_create', 'master_data_edit'
        ]), 403);


        if ($request->ajax()) {
            $term = trim($request->term);
            $location = DB::table('location')
            ->select('location_id as id', 'location_code as text')
                ->where('location_code', 'LIKE', '%' . $term. '%')
                ->orderBy('location_code', 'asc')
                ->simplePaginate(10);

            $morePages = true;
            $pagination_obj = json_encode($location);
            if (empty($location->nextPageUrl())) {
                $morePages=false;
            }
            $results = array(
              "results" => $location->items(),
              "pagination" => array(
                "more" => $morePages
              )
            );

            return response()->json($results);
        }
    }

    public function getAjaxUnits()
    {
        $this->authorize('master_data_access');

        $model = OrganizationUnit::with('location')
        ->select('organization_units.*');

        return Datatables::of($model)
        ->editColumn('name', function ($model) {
            if (Auth::user()->can('master_data_syllabus_access')) {
                return '
                <a href="' . route('master-data.organization-units.syllabuses.index', $model->organization_id) . '">
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
        })
        ->addColumn('location', static function ($model) {
            return $model->location->location_code ?? '';
        })
        ->addColumn('action', static function ($model) {
            return view('MasterData.OrganizationUnit.Datatables.action', compact('model'));
        })->rawColumns(['action', 'name'])
        ->toJson();
    }

    public function import(Request $request)
    {
        $this->authorize('master_data_create');

        $request->validate([
            'import_file'=> 'required|mimes:xlsx, csv, xls'
         ]);

        Excel::import(new OrganizationUnitImport(), $request->file('import_file'));

        toast('Import Organization Unit Successfully', 'success');

        return redirect()->back();
    }

    public function export() 
    {
        return Excel::download(new OrganizationUnitExport(), 'organization-unit.xlsx');
    }

    public function downloadFormat()
    {
        $this->authorize('master_data_create');
        
        if (is_file(public_path('storage\files\excel\format\organization_units\OrganizationUnits_Format.xlsx'))){
            return response()->download(public_path('storage\files\excel\format\organization_units\OrganizationUnits_Format.xlsx'));
        }else{
            abort(404);
        }   
    }
}
