<?php

namespace App\Http\Controllers;

use App\Models\Elearning;
use App\Models\Enrollment;
use App\Models\Module;
use DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Count Module
        $modules = Module::select('elearning_modules.elearning_id', DB::raw('COUNT(elearning_id) as count'))->groupBy('elearning_id');

        // Elearning For Carousel
        $carousel_elearnings = Elearning::latest()->where('is_active', '=', true)->limit(3)->select('id', 'name', 'description')->get();

        // Show ALl Elearning & Search
        if (request('keyword') != null) {
            $elearnings = Elearning::where('is_active', '=', true)->where('name', 'Like', '%' . request('keyword') . '%')->leftJoinSub($modules, 'modules', function ($join) {
                $join->on('elearnings.id', '=', 'modules.elearning_id');
            })->select('id', 'name', 'count')->get();
        } else {
            $elearnings = Elearning::where('is_active', '=', true)->leftJoinSub($modules, 'modules', function ($join) {
                $join->on('elearnings.id', '=', 'modules.elearning_id');
            })->select('id', 'name', 'count')->get();
        }


        // Enrolled Elearning
        $enrolled_query = Enrollment::where('user_id', '=', auth()->id())->join('elearnings', 'enrollments.elearning_id', '=', 'elearnings.id')->where('is_active', '=', true)->select('elearnings.id', 'name');

        // Elearning in Progress
        $elearning_in_progress = $enrolled_query->limit(4)->get();

        // Get Enrolled Elearning Id
        $enrolled_ids = [];
        foreach ($enrolled_query->get() as $enrolled_elearning) {
            $enrolled_ids[] = $enrolled_elearning->id;
        }

        return view('Karyawan.Home.index', compact('carousel_elearnings', 'elearnings', 'elearning_in_progress', 'enrolled_ids'));
    }

    public function markNotification(Request $request)
    {
        auth()->user()
            ->unreadNotifications
            ->when($request->input('id'), function ($query) use ($request) {
                return $query->where('id', $request->input('id'));
            })
            ->markAsRead();

        return redirect()->back();
    }

    public function searchElearning(Request $request)
    {
        $modules = Module::select('elearning_modules.elearning_id', DB::raw('COUNT(elearning_id) as count'))->groupBy('elearning_id');

        if ($request->keyword == '') {
            $elearnings = Elearning::where('is_active', '=', true)->leftJoinSub($modules, 'modules', function ($join) {
                $join->on('elearnings.id', '=', 'modules.elearning_id');
            })->select('id', 'name', 'count')->get();
        } else {
            $elearnings = Elearning::where('name', 'Like', '%' . $request->keyword . '%')->where('is_active', '=', true)->leftJoinSub($modules, 'modules', function ($join) {
                $join->on('elearnings.id', '=', 'modules.elearning_id');
            })->select('id', 'name', 'count')->get();
        }

        return response()->json($elearnings);
    }
}
