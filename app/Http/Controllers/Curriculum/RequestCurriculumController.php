<?php

namespace App\Http\Controllers\Curriculum;

use App\Http\Controllers\Controller;
use App\Models\Curriculum;
use Illuminate\Http\Request;

class RequestCurriculumController extends Controller
{
    public function index()
    {
        $this->authorize('curriculum_approve');

        $curriculum = Curriculum::where('status_id', 3)->get();

        return view('Curriculum.RequestCurriculum.index', compact('curriculum'));
    }
}
