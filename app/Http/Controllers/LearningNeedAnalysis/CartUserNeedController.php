<?php

namespace App\Http\Controllers\LearningNeedAnalysis;

use App\Http\Controllers\Controller;
use App\Models\Syllabus;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartUserNeedController extends Controller
{
    public function store(Request $request)
    {
        $syllabus_id = Syllabus::findOrFail($request->input('syllabus_id'));
        
        abort_if($syllabus_id->status_id != 1, 403);

        $cart_user_needs = Cart::instance('user-needs');

        if($cart_user_needs->count() < 1){
            $cart_user_needs->add(
                $syllabus_id->id,
                $syllabus_id->training_name,
                1,
                0,
            )->associate('App\Models\Syllabus');
        }else{
            abort(403);
        }

        toast('Syllabus Successfully Added', 'success');
     
        return redirect()->route('learning-need-analysis.user-needs.create')->with('message', 'Successfully added')->withInput(['tab'=>'tabs-icons-text-2']);
    }

    public function destroy($id)
    {
        Cart::instance('user-needs')->remove($id);

        toast('Syllabus Successfully Deleted', 'success');

        return redirect()->route('learning-need-analysis.user-needs.create')->with('message', 'Successfully deleted');
    }
}
