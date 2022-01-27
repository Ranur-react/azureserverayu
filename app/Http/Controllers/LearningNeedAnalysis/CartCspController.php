<?php

namespace App\Http\Controllers\LearningNeedAnalysis;

use App\Http\Controllers\Controller;
use App\Models\Syllabus;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartCspController extends Controller
{
    public function store(Request $request)
    {
        $syllabus_id = Syllabus::findOrFail($request->input('syllabus_id'));
        Cart::instance('csp')->add(
            $syllabus_id->id,
            $syllabus_id->training_name,
            1,
            0,
        )->associate('App\Models\Syllabus');
        return redirect()->route('learning-design.learning-need-analysis.csp.index')->with('message', 'Successfully added');
    }

    public function destroy($id)
    {
        Cart::instance('csp')->remove($id);
        return redirect()->route('learning-design.learning-need-analysis.csp.index')->with('message', 'Successfully deleted');
    }
}
