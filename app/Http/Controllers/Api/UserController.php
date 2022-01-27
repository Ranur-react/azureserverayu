<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use DataTables;
use DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // $model = User::where();

        // return DataTables::of($model)->toJson();
    }

    
}
