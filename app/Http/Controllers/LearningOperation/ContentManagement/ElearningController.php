<?php

namespace App\Http\Controllers\LearningOperation\ContentManagement;

use App\Http\Controllers\Controller;
use App\Http\Requests\LearningAdmin\Store\StoreElearningRequest;
use App\Http\Requests\LearningAdmin\Update\UpdateElearningRequest;
use App\Models\Elearning;
use Illuminate\Http\Request;

class ElearningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $elearnings = Elearning::all();
        return view('LearningOperation.ContentManagement.index', compact('elearnings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreElearningRequest $request)
    {
        Elearning::create($request->all());

        toast('E-Learning Successfully Created', 'success');

        return redirect()->route('learning-operation.content-management.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Elearning  $elearning
     * @return \Illuminate\Http\Response
     */
    public function show(Elearning $elearning)
    {
        $elearning = $elearning->findOrFail(request('content_management'));
        return view('LearningOperation.ContentManagement.show', compact('elearning'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Elearning  $elearning
     * @return \Illuminate\Http\Response
     */
    public function edit(Elearning $elearning)
    {
        $elearning = $elearning->findOrFail(request('content_management'));
        return view('LearningOperation.ContentManagement.edit', compact('elearning'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Elearning  $elearning
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateElearningRequest $request, Elearning  $elearning)
    {
        $elearning->findOrFail($request->content_management)->update($request->validated());

        toast('E-Learning Successfully Updated', 'success');

        return redirect()->route('learning-operation.content-management.edit', $request->content_management);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Elearning  $elearning
     * @return \Illuminate\Http\Response
     */
    public function destroy(Elearning $elearning)
    {
        $elearning->destroy(request('content_management'));

        toast('Elearning Successfully Deleted', 'success');

        return redirect()->route('learning-operation.content-management.index');
    }

    /**
     * Deactivate the specified resource .
     *
     * @param  \App\Models\Elearning  $elearning
     * @return \Illuminate\Http\Response
     */
    public function deactivate(Elearning $elearning)
    {
        $elearning->findOrFail(request('content_management'))->update([
            'is_active' => false
        ]);

        toast('Elearning Successfully Deactivate', 'success');

        return redirect()->route('learning-operation.content-management.edit', request('content_management'));
    }

    /**
     * Activate the specified resource .
     *
     * @param  \App\Models\Elearning  $elearning
     * @return \Illuminate\Http\Response
     */
    public function activate(Elearning  $elearning)
    {
        $elearning->findOrFail(request('content_management'))->update([
            'is_active' => true
        ]);

        toast('Elearning Successfully Deactivate', 'success');

        return redirect()->route('learning-operation.content-management.edit', request('content_management'));
    }
}
