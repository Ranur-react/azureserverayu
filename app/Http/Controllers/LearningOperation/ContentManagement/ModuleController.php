<?php

namespace App\Http\Controllers\LearningOperation\ContentManagement;

use App\Http\Controllers\Controller;
use App\Http\Requests\LearningAdmin\Store\StoreModuleRequest;
use App\Http\Requests\LearningAdmin\Update\UpdateModuleRequest;
use App\Models\Elearning;
use App\Models\ElearningText;
use App\Models\Module;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ModuleController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreModuleRequest $request)
    {
        $last_section = Module::where('elearning_id', '=', $request->content_management)->max('section');

        Module::create([
            'elearning_id' => $request->content_management,
            'section' => $last_section + 1,
            'name' => $request->name,
            'is_active' => 1
        ]);

        toast('Module Successfully Created', 'success');

        return redirect()->route('learning-operation.content-management.module.edit', [$request->content_management, $last_section + 1]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $elearning = Elearning::findOrFail(request('content_management'));
        $module = Module::where('elearning_id', '=', request('content_management'))->where('section', '=', request('module'))->first();
        $text = ElearningText::where('module_id', '=', $module->id)->first();

        return view('LearningOperation.ContentManagement.Module.show', compact('elearning', 'module', 'text'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $elearning = Elearning::findOrFail(request('content_management'));
        $module = Module::where('elearning_id', '=', request('content_management'))->where('section', '=', request('module'))->first();
        $text = ElearningText::where('module_id', '=', $module->id)->first();

        return view('LearningOperation.ContentManagement.Module.edit', compact('elearning', 'module', 'text'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateModuleRequest $request, $id_elearning, $id_section)
    {
        $module = Module::where('elearning_id', '=', $id_elearning)->where('section', '=', $id_section)->first();

        $module->update($request->validated());

        toast('Module Successfully Updated', 'success');

        return redirect()->route('learning-operation.content-management.module.show', [$id_elearning, $id_section]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_elearning, $id_section)
    {
        $module = Module::where('elearning_id', '=', $id_elearning)->where('section', '=', $id_section)->first();
        // dd($module->title);
        $module->delete();

        toast('Module Successfully Deleted', 'success');

        return redirect()->route('learning-operation.content-management.show', $id_elearning);
    }

    /**
     * Deactivate the specified resource .
     *
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function deactivate(Module $module)
    {
        $module->where('elearning_id', '=', request('content_management'))->where('section', '=', request('section'))->first()->update([
            'is_active' => false
        ]);

        toast('Module Successfully Deactivate', 'success');

        return redirect()->route('learning-operation.content-management.module.edit', [request('content_management'), request('section')]);
    }

    /**
     * Activate the specified resource .
     *
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function activate(Module $module)
    {
        $module->where('elearning_id', '=', request('content_management'))->where('section', '=', request('section'))->first()->update([
            'is_active' => true
        ]);

        toast('Module Successfully Activated', 'success');

        return redirect()->route('learning-operation.content-management.module.edit', [request('content_management'), request('section')]);
    }
}
