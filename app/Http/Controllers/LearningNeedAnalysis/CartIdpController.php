<?php

namespace App\Http\Controllers\LearningNeedAnalysis;

use App\Http\Controllers\Controller;
use App\Models\Competency;
use App\Models\Idp;
use App\Models\Syllabus;
use App\Models\User;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartIdpController extends Controller
{
    public function store(Request $request, $nik, $idp_period_id)
    {
        $syllabus_id = Syllabus::findOrFail($request->input('syllabus_id'));
        abort_if($syllabus_id->status_id != 1, 403);
        Cart::instance('idp'.$nik.$idp_period_id)->add(
            $syllabus_id->id,
            $syllabus_id->training_name,
            1,
            0,
        );
        return redirect()->route('learning-need-analysis.idp.createIdp', [$nik, $idp_period_id])->with('message', 'Successfully added');
    }

    public function destroy($nik, $idp_period_id, $id)
    {
        Cart::instance('idp'.$nik.$idp_period_id)->remove($id);
        return redirect()->route('learning-need-analysis.idp.createIdp', [$nik, $idp_period_id])->with('message', 'Successfully deleted');
    }
}
