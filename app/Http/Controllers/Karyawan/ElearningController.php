<?php

namespace App\Http\Controllers\Karyawan;

use App\Http\Controllers\Controller;
use App\Models\Elearning;
use App\Models\Enrollment;
use App\Models\Module;
use Carbon\Carbon;

class ElearningController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $elearning = Elearning::findOrFail($id);

        return view('Karyawan.MyCourse.Course.Elearning.show', compact('elearning'));
    }

    /**
     * View the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function viewElearning($id)
    {
        $elearning = Elearning::findOrFail($id);

        $enroll_status = Enrollment::where('user_id', '=', auth()->id())->where('elearning_id', '=', $id)->exists();

        return view('Karyawan.MyCourse.Course.Elearning.index', compact('elearning', 'enroll_status'));
    }

    /**
     * View the specified resource.
     *
     * @param  int id
     * @return \Illuminate\Http\Response
     */
    public function showModule($id)
    {
        $elearning = Elearning::findOrFail($id);

        $module = Module::where('elearning_id', '=', $id)->where('section', '=', request('module'))->first();

        return view('Karyawan.MyCourse.Course.Elearning.Module.show', compact('elearning', 'module'));
    }

    /**
     * Enroll the specified E-Learning.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function selfEnroll($id)
    {
        Enrollment::create([
            'user_id' => auth()->id(),
            'elearning_id' => $id,
            'start_date' => Carbon::now()->format('Y/m/d'),
            'status' => 'working'
        ]);

        toast('Successfully Enroll E-Learning', 'success');

        return redirect()->route('elearning.show', $id);
    }
}
