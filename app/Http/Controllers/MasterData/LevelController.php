<?php

namespace App\Http\Controllers\MasterData;

use App\Http\Controllers\Controller;
use App\Http\Requests\LearningAdmin\Store\StoreLevelRequest;
use App\Http\Requests\LearningAdmin\Update\UpdateLevelRequest;
use App\Imports\LocationImport;
use App\Models\Level;
use Excel;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('master_data_access');

        $levels = Level::all('id', 'name')->sortBy('name');
        return view('MasterData.Level.index', compact('levels'));
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
    public function store(StoreLevelRequest $request)
    {
        Level::create($request->validated());

        toast('Level Successfully Created', 'success');

        return redirect()->route('master-data.levels.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Level $level)
    {
        $this->authorize('master_data_edit');

        return view('MasterData.Level.edit', compact('level'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLevelRequest $request, Level $level)
    {
        $level->update($request->validated());

        toast('Level Successfully Updated', 'success');

        return redirect()->route('master-data.levels.edit', $level);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Level $level)
    {
        $this->authorize('master_data_delete');

        $level->delete();

        toast('Level Successfully Deleted', 'success');

        return redirect()->back();
    }
}
