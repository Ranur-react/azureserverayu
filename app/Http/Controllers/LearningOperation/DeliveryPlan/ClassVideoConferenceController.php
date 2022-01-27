<?php

namespace App\Http\Controllers\LearningOperation\DeliveryPlan;

use App\Http\Controllers\Controller;
use App\Http\Requests\LearningAdmin\Store\StoreClassVideoConferenceRequest;
use App\Http\Requests\LearningAdmin\Update\UpdateClassVideoConferenceRequest;
use App\Models\ClassSection;
use App\Models\ClassVideoConference;
use DB;
use Illuminate\Http\Request;

class ClassVideoConferenceController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClassVideoConferenceRequest $request)
    {
        ClassVideoConference::create([
            'section_id' => $request->section,
            'platform' => $request->platform,
            'name' => $request->name,
            'url' => $request->url
        ]);

        toast('Video Conference Successfully Created', 'success');

        $id_session = ClassSection::where('id', '=', $request->section)->first()->section;

        return redirect()->route('learning-operation.delivery-plan.section.edit', [$request->delivery_plan, $id_session]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ClassVideoConference  $classVideoConference
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClassVideoConferenceRequest $request, ClassVideoConference $classVideoConference)
    {
        $classVideoConference->findOrFail($request->video_conference)->update($request->all());

        toast('Video Conference Successfully Updated', 'success');

        $id_session = ClassSection::where('id', '=', $request->section)->first()->section;

        return redirect()->route('learning-operation.delivery-plan.section.edit', [$request->delivery_plan, $id_session]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClassVideoConference  $classVideoConference
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClassVideoConference $classVideoConference)
    {
        $classVideoConference->destroy(request('video_conference'));

        toast('Video Conference Successfully Deleted', 'success');

        return redirect()->route('learning-operation.delivery-plan.section.edit', [request('delivery_plan'), request('section')]);
    }
}
