<?php

namespace App\Http\Controllers\LearningOperation\ContentManagement;

use App\Http\Controllers\Controller;
use App\Http\Requests\LearningAdmin\Store\StoreTextRequest;
use App\Models\ElearningText;
use App\Models\Module;
use DB;
use Illuminate\Http\Request;

class ElearningTextController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTextRequest $request)
    {
        ElearningText::create([
            'module_id' => $request->module,
            'text' => $request->text_content,
            'name' => $request->name
        ]);

        toast('Text Successfully Added', 'success');

        $id_section = Module::findOrFail($request->module)->section;

        return redirect()->route('learning-operation.content-management.module.edit', [$request->content_management, $id_section]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ElearningText  $elearningText
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ElearningText $elearningText)
    {
        $elearningText->findOrFail($request->text)->update([
            'name' => $request->name,
            'text' => $request->text_content,
        ]);

        toast('Text Successfully Updated', 'success');

        $id_section = Module::findOrFail($request->module)->section;

        return redirect()->route('learning-operation.content-management.module.edit', [$request->content_management, $id_section]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ElearningText  $elearningText
     * @return \Illuminate\Http\Response
     */
    public function destroy(ElearningText $elearningText)
    {
        $elearningText->destroy(request('text'));

        toast('Text Successfully Deleted', 'success');

        return redirect()->route('learning-operation.content-management.module.edit', [request('content_management'), request('module')]);
    }
}
