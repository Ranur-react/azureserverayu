<?php

namespace App\Http\Controllers\LearningOperation\DeliveryPlan;

use App\Http\Controllers\Controller;
use App\Http\Requests\LearningAdmin\Store\StoreClassTextRequest;
use App\Models\ClassSection;
use App\Models\ClassText;
use DB;
use Illuminate\Http\Request;

class ClassTextController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClassTextRequest $request)
    {
        ClassText::create([
            'section_id' => $request->section,
            'name' => $request->name,
            'text' => $request->text_content
        ]);

        toast('Text Successfully Added', 'success');

        $id_session = ClassSection::findOrFail($request->section)->section;

        return redirect()->route('learning-operation.delivery-plan.section.edit', [$request->delivery_plan, $id_session]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ClassText  $classText
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClassText $classText)
    {
        $classText->findOrFail($request->text)->update([
            'name' => $request->name,
            'text' => $request->text_content
        ]);

        toast('Text Successfully Updated', 'success');

        $id_session = ClassSection::findOrFail($request->section)->section;

        return redirect()->route('learning-operation.delivery-plan.section.edit', [$request->delivery_plan, $id_session]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClassText  $classText
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClassText $classText)
    {
        $classText->destroy(request('text'));

        toast('Text Successfully Deleted', 'success');

        return redirect()->route('learning-operation.delivery-plan.section.edit', [request('delivery_plan'), request('section')]);
    }
}
