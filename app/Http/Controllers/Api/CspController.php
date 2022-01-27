<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Csp;
use App\Models\Syllabus;
use Illuminate\Http\Request;
use Response;

class CspController extends Controller
{
    public function show(Request $request)
    {
        $data = Syllabus::whereIn('id', $request->syllabus_id)->get()->toArray();

        return response()->json([
            'data' => $data,
        ]);
    }
}
