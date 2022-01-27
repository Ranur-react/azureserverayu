<?php

namespace App\Http\Controllers\Karyawan;

use App\Http\Controllers\Controller;
use App\Models\ClassSection;
use App\Models\TrainingClass;

class ClassController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $trainingclass = TrainingClass::findOrFail($id);

        return view('Karyawan.MyCourse.Course.Class.show', compact('trainingclass'));
    }

    /**
     * View the specified resource.
     *
     * @param  int id
     * @return \Illuminate\Http\Response
     */
    public function showSession($id)
    {
        $trainingclass = TrainingClass::findOrFail($id);

        $section = ClassSection::where('class_id', '=', $id)->where('section', '=', request('section'))->first();

        return view('Karyawan.MyCourse.Course.Class.Section.show', compact('trainingclass', 'section'));
    }
}
