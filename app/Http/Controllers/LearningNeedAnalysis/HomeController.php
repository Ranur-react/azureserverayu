<?php

namespace App\Http\Controllers\LearningDesign\LearningNeedAnalysis;

use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $users = User::where('nik_atasan', Auth::user()->nik)->get();
        if(Auth::user()->hasRole('Learning Design') || 
        Auth::user()->hasRole('Atasan Learning Design') || $users->count() > 0)
        {
            return view('LearningDesign.LearningNeedAnalysis.Home.index');
        }else{
            abort(404);
        }
        
    }
}
