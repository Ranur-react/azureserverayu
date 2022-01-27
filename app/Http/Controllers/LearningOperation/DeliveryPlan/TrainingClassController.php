<?php

namespace App\Http\Controllers\LearningOperation\DeliveryPlan;

use App\Http\Controllers\Controller;
use App\Http\Requests\LearningAdmin\Store\StoreClassRequest;
use App\Http\Requests\LearningAdmin\Update\UpdateClassRequest;
use App\Models\TrainingClass;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TrainingClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainingclasses = TrainingClass::all();
        return view('LearningOperation.DeliveryPlan.index', compact('trainingclasses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClassRequest $request)
    {
        TrainingClass::create($request->all());

        toast('Class Successfully Created', 'success');

        return redirect()->route('learning-operation.delivery-plan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TrainingClass  $trainingClass
     * @return \Illuminate\Http\Response
     */
    public function show(TrainingClass $trainingClass)
    {
        $trainingclass = $trainingClass->findOrFail(request('delivery_plan'));
        return view('LearningOperation.DeliveryPlan.show', compact('trainingclass'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TrainingClass  $trainingClass
     * @return \Illuminate\Http\Response
     */
    public function edit(TrainingClass $trainingClass)
    {
        $trainingclass = $trainingClass->findOrFail(request('delivery_plan'));
        return view('LearningOperation.DeliveryPlan.edit', compact('trainingclass'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TrainingClass  $trainingClass
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TrainingClass $trainingClass)
    {
        $trainingClass->findOrFail($request->delivery_plan)->update($request->all());

        toast('Class Successfully Updated', 'success');

        return redirect()->route('learning-operation.delivery-plan.edit', $request->delivery_plan);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TrainingClass  $trainingClass
     * @return \Illuminate\Http\Response
     */
    public function destroy(TrainingClass $trainingClass)
    {
        $trainingClass->destroy(request('delivery_plan'));

        toast('Class Successfully Deleted', 'success');

        return redirect()->route('learning-operation.delivery-plan.index');
    }

    /**
     * Deactivate the specified resource .
     *
     * @param  \App\Models\TrainingClass  $trainingClass
     * @return \Illuminate\Http\Response
     */
    public function deactivate(TrainingClass $trainingClass)
    {
        $trainingClass->findOrFail(request('delivery_plan'))->update([
            'is_active' => false
        ]);

        toast('Class Successfully Deactivate', 'success');

        return redirect()->route('learning-operation.delivery-plan.edit', request('delivery_plan'));
    }

    /**
     * Activate the specified resource .
     *
     * @param  \App\Models\TrainingClass  $trainingClass
     * @return \Illuminate\Http\Response
     */
    public function activate(TrainingClass  $trainingClass)
    {
        $trainingClass->findOrFail(request('delivery_plan'))->update([
            'is_active' => true
        ]);

        toast('Class Successfully Deactivate', 'success');

        return redirect()->route('learning-operation.delivery-plan.edit', request('delivery_plan'));
    }
}
