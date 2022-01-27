<?php

namespace App\Http\Controllers\SuperAdmin\Log;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class LoginLogController extends Controller
{
    public function index()
    {
        $number_blocks = [
            [
                'title' => 'User Logged In Today',
                'number' => User::whereDate('last_login_time', today())->count()
            ],
            [
                'title' => 'User Logged In Last 7 Days',
                'number' => User::whereDate('last_login_time', '>', today()->subDays(7))->count()
            ],
            [
                'title' => 'User Logged In Last 30 Days',
                'number' => User::whereDate('last_login_time', '>', today()->subDays(30))->count()
            ],
        ];

        $list_blocks = [
            [
                'title' => 'Last Logged In Users',
                'entries' => User::orderBy('last_login_time', 'desc')
                    ->take(5)
                    ->get(),
            ],
            [
                'title' => 'Users Not Logged In For 30 Days',
                'entries' => User::where('last_login_time', '<', today()->subDays(30))
                    ->orWhere('last_login_time', null)
                    ->orderBy('last_login_time', 'desc')
                    ->take(5)
                    ->get()
            ],
        ];

        return view('SuperAdmin.Log.Login-Log.index', compact('number_blocks', 'list_blocks'));
    }
}
