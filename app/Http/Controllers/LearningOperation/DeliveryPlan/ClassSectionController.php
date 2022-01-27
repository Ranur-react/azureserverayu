<?php

namespace App\Http\Controllers\LearningOperation\DeliveryPlan;

use App\Http\Controllers\Controller;
use App\Http\Requests\LearningAdmin\Store\StoreClassSectionRequest;
use App\Models\ClassSection;
use App\Models\ClassText;
use App\Models\ClassVideoConference;
use App\Models\TrainingClass;
use DB;
use Illuminate\Http\Request;

class ClassSectionController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClassSectionRequest $request)
    {
        // dd($request->all());
        $last_section = ClassSection::where('class_id', '=', $request->delivery_plan)->max('section');

        ClassSection::create([
            'class_id' => $request->delivery_plan,
            'section' => $last_section + 1,
            'name' => $request->name,
            'delivery_method' => $request->delivery_method,
            'date_time' => $request->date_time,
            'is_active' => true
        ]);
        toast('Class Section Successfully Created', 'success');

        return redirect()->route('learning-operation.delivery-plan.section.edit', [$request->delivery_plan, $last_section + 1]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClassSection  $classSection
     * @return \Illuminate\Http\Response
     */
    public function show(ClassSection $classSection)
    {
        $trainingclass = TrainingClass::findOrFail(request('delivery_plan'));
        $section = $classSection::where('class_id', '=', request('delivery_plan'))->where('section', '=', request('section'))->first();
        $vidcon = ClassVideoConference::where('section_id', '=', $section->id)->first();
        $text = ClassText::where('section_id', '=', $section->id)->first();

        return view('LearningOperation.DeliveryPlan.Section.show', compact('trainingclass', 'section', 'vidcon', 'text'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClassSection  $classSection
     * @return \Illuminate\Http\Response
     */
    public function edit(ClassSection $classSection)
    {
        $trainingclass = TrainingClass::findOrFail(request('delivery_plan'));
        $section = $classSection::where('class_id', '=', request('delivery_plan'))->where('section', '=', request('section'))->first();
        $vidcon = ClassVideoConference::where('section_id', '=', $section->id)->first();
        $text = ClassText::where('section_id', '=', $section->id)->first();

        return view('LearningOperation.DeliveryPlan.Section.edit', compact('trainingclass', 'section', 'vidcon', 'text'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ClassSection  $classSection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClassSection $classSection)
    {
        $classSection->where('class_id', '=', $request->delivery_plan)->where('section', '=', $request->section)->first()->update($request->all());

        toast('Section Successfully Updated', 'success');

        return redirect()->route('learning-operation.delivery-plan.section.edit', [$request->delivery_plan, $request->section]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClassSection  $classSection
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ClassSection::where('class_id', '=', request('delivery_plan'))->where('section', '=', request('section'))->first()->delete();

        toast('Section Successfully Deleted', 'success');

        return redirect()->route('learning-operation.delivery-plan.show', request('delivery_plan'));
    }

    /**
     * Deactivate the specified resource .
     *
     * @param  \App\Models\ClassSection  $classSection
     * @return \Illuminate\Http\Response
     */
    public function deactivate(ClassSection $classSection)
    {
        $classSection->where('elearning_id', '=', request('content_management'))->where('section', '=', request('section'))->first()->update([
            'is_active' => false
        ]);

        toast('Session Successfully Deactivate', 'success');

        return redirect()->route('learning-operation.delivery-plan.section.edit', [request('delivery_plan'), request('section')]);
    }

    /**
     * Activate the specified resource .
     *
     * @param  \App\Models\ClassSection  $classSection
     * @return \Illuminate\Http\Response
     */
    public function activate(ClassSection $classSection)
    {
        $classSection->where('elearning_id', '=', request('content_management'))->where('section', '=', request('section'))->first()->update([
            'is_active' => true
        ]);

        toast('Session Successfully Deactivate', 'success');

        return redirect()->route('learning-operation.delivery-plan.section.edit', [request('delivery_plan'), request('section')]);
    }
}
