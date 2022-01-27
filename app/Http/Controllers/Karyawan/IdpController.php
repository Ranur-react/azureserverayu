<?php

namespace App\Http\Controllers\Karyawan;

use App\Http\Controllers\Controller;
use App\Models\Idp;
use Auth;
use Illuminate\Http\Request;

class IdpController extends Controller
{
    public function index()
    {
        $idpUser = Idp::with('idpPeriod')
        ->where('nik', Auth::user()->employee->nik)->get();

        return view('Karyawan.IDP.Index', compact('idpUser'));
    }

    public function show($id)
    {
        $idpUser = Idp::with('idpPeriod', 'syllabuses', 'syllabuses.prfCompetencyCatalog')
        ->findOrFail($id);

        abort_if($idpUser->nik != Auth::user()->employee->nik, 404);

        return view('Karyawan.IDP.Show', compact('idpUser'));
    }
}
