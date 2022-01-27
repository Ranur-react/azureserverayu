<?php

namespace App\Http\Controllers\Karyawan;

use App\Http\Controllers\Controller;
use Auth;
use DB;
use Illuminate\Http\Request;

class MyCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modules = DB::table('elearning_modules')->select('elearning_modules.elearning_id', DB::raw('COUNT(elearning_id) as count'))->groupBy('elearning_id');

        $active_elearnings = DB::table('enrollments')->where('user_id', '=', Auth::id())->join('elearnings', 'enrollments.elearning_id', '=', 'elearnings.id')->leftJoinSub($modules, 'modules', function ($join) {
            $join->on('elearnings.id', '=', 'modules.elearning_id');
        })->get();
        $inactive_elearnings = DB::table('enrollments')->where('user_id', '=', Auth::id())->join('elearnings', 'enrollments.elearning_id', '=', 'elearnings.id')->leftJoinSub($modules, 'modules', function ($join) {
            $join->on('elearnings.id', '=', 'modules.elearning_id');
        })->select('elearnings.id', 'name', 'count', 'is_active')->where('is_active', '=', false)->get();

        $sections = DB::table('class_sections')->select('class_sections.class_id', DB::raw('COUNT(class_id) as count'))->groupBy('class_id');

        $active_trainingclasses = DB::table('enrollments')->where('user_id', '=', Auth::id())->join('classes', 'enrollments.class_id', '=', 'classes.id')->leftJoinSub($sections, 'sections', function ($join) {
            $join->on('classes.id', '=', 'sections.class_id');
        })->select('classes.id', 'name', 'count', 'is_active')->where('is_active', '=', true)->get();
        $inactive_trainingclasses = DB::table('enrollments')->where('user_id', '=', Auth::id())->join('classes', 'enrollments.class_id', '=', 'classes.id')->leftJoinSub($sections, 'sections', function ($join) {
            $join->on('classes.id', '=', 'sections.class_id');
        })->select('classes.id', 'name', 'count', 'is_active')->where('is_active', '=', false)->get();

        return view('Karyawan.MyCourse.index', compact('active_elearnings', 'inactive_elearnings', 'active_trainingclasses', 'inactive_trainingclasses'));
    }
}
