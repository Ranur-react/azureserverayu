<?php

namespace App\Http\Controllers\Karyawan;

use App\Http\Controllers\Controller;
use App\Models\Enrollment;
use Auth;
use DB;
use Illuminate\Http\Request;

class TrainingCalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $trainingclasses = Enrollment::where('user_id', '=', Auth::id())->join('classes', 'enrollments.class_id', '=', 'classes.id')->leftJoin('class_sections', 'class_sections.class_id', '=', 'classes.id')->leftJoin('class_video_conference', 'class_sections.id', '=', 'class_video_conference.section_id')->selectRaw('classes.id as id, classes.name as class_name, class_sections.name as title, class_sections.date_time as start, class_video_conference.name as vidcon_name, class_video_conference.platform as platform, class_video_conference.url as vidcon_url')->where('class_sections.is_active', '=', true)->get();

        $trainingclasses = json_encode($trainingclasses);

        return view('Karyawan.TrainingCalendar.index', compact('trainingclasses'));
    }
}
