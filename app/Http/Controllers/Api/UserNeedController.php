<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Auth;
use DataTables;
use DB;
use Illuminate\Http\Request;

class UserNeedController extends Controller
{
    public function index()
    {
        $query = DB::table('user_needs')
            ->join('users', 'user_needs.user_id', '=', 'users.id')
            ->join('syllabuses', 'user_needs.syllabus_id', '=', 'syllabuses.id')
            ->join('user_needs_statuses', 'user_needs.status_id', '=', 'user_needs_statuses.id')
            ->where('user_needs.created_by', '=', Auth::user()->id)
            ->groupBy('syllabus_id')
            ->orderBy('count', 'desc')
            ->select(
                'user_needs.*',
                DB::raw('COUNT(syllabus_id) as count'),
                'syllabuses.syllabus_code',
                'syllabuses.training_name',
                'syllabuses.id',
                'user_needs_statuses.name as status_name',
                // 'users.name',
                // 'users.division',
            );

        return DataTables::of($query)
            ->toJson();
    }
    public function show(Request $request)
    {
        $query =DB::table('user_needs')
            ->join('users', 'user_needs.user_id', '=', 'users.id')
            ->join('syllabuses', 'user_needs.syllabus_id', '=', 'syllabuses.id')
            ->where('syllabus_id', $request->id)
            ->where('user_needs.created_by', '=', 15848)
            ->select([
                'users.nik', 'users.name', 'users.title', 'users.organization']);

        return DataTables::of($query)
            ->toJson();
    }
}
