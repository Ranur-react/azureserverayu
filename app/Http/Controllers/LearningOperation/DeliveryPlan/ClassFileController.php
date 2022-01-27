<?php

namespace App\Http\Controllers\LearningOperation\DeliveryPlan;

use App\Http\Controllers\Controller;
use App\Models\ClassFile;
use Illuminate\Http\Request;

class ClassFileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClassFile  $classFile
     * @return \Illuminate\Http\Response
     */
    public function show(ClassFile $classFile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClassFile  $classFile
     * @return \Illuminate\Http\Response
     */
    public function edit(ClassFile $classFile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ClassFile  $classFile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClassFile $classFile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClassFile  $classFile
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClassFile $classFile)
    {
        //
    }
}
