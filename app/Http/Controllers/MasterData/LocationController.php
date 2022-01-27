<?php

namespace App\Http\Controllers\MasterData;

use App\Exports\LocationExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\LearningAdmin\Store\StoreLocationRequest;
use App\Http\Requests\LearningAdmin\Update\UpdateLocationRequest;
use App\Imports\LocationImport;
use App\Models\Location;
use DataTables;
use Auth;
use Excel;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $locations = Location::all('id', 'name')->sortBy('name');

        $this->authorize('master_data_access');

        return view('MasterData.Location.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('master_data_create');

        return view('MasterData.Location.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLocationRequest $request)
    {
        Location::create($request->validated());

        toast('Location Successfully Created', 'success');

        return redirect()->route('master-data.locations.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Location $location)
    {
        $this->authorize('master_data_show');

        return view('MasterData.Location.show', compact('location'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Location $location)
    {
        $this->authorize('master_data_edit');

        return view('MasterData.Location.edit', compact('location'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLocationRequest $request, Location $location)
    {
        $location->update($request->validated());

        toast('Location Successfully Updated', 'success');

        return redirect()->route('master-data.locations.edit', $location);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Location $location)
    {
        $this->authorize('master_data_delete');

        $location->delete();

        toast('Location Successfully Deleted', 'success');

        return redirect()->back();
    }

    public function getAjaxLocations()
    {
        $this->authorize('master_data_access');

        $model = Location::query();

        return Datatables::of($model)
            ->editColumn('location_code', function ($model) {
                if (Auth::user()->can('master_data_syllabus_access')) {
                    return '
                <a href="' . route('master-data.locations.syllabuses.index', $model->location_id) . '">
                    <div>
                    ' . $model->location_code . '
                    </div>
                </a>';
                } else {
                    return '
                    <div>
                    ' . $model->location_code . '
                    </div>';
                }
            })
            ->addColumn('action', static function ($model) {
                return view('MasterData.Location.Datatables.action', compact('model'));
            })->rawColumns(['location_code', 'action'])
            ->toJson();
    }

    public function import(Request $request)
    {
        $this->authorize('master_data_create');

        $request->validate([
            'import_file'=> 'required|mimes:xlsx, csv, xls'
         ]);

        Excel::import(new LocationImport(), $request->file('import_file'));

        toast('Import Location Successfully', 'success');

        return redirect()->back();
    }

    public function export() 
    {
        return Excel::download(new LocationExport, 'location.xlsx');
    }

    public function downloadFormat()
    {
        $this->authorize('master_data_create');
        
        if (is_file(public_path('storage\files\excel\format\locations\Locations_Format.xlsx'))){
            return response()->download(public_path('storage\files\excel\format\locations\Locations_Format.xlsx'));
        }else{
            abort(404);
        }   
    }
}
