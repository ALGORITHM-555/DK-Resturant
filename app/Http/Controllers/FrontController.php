<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DiscountOffer;
use App\Models\Block;

class FrontController extends Controller
{
    public function index(Request $request){
        $discount_block_arr = Block::where('name','Discount')->select('value')->first();
        $discount_detail = new DiscountOffer;
        $discount_detail->offers = DiscountOffer::all()->take(4);   
        $discount_detail->value = $discount_block_arr;
        return view('front-end.index')->with(compact('discount_detail'));
    }
}
