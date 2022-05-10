<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Block;
use App\Models\Discount;

class BlockController extends Controller
{
    public function index(Request $request){            
        $blocks = Block::all();                
        if($request->ajax()){
            $status_arr = $request->only(['data-id','block_status']);            
            if($status_arr['block_status'] == true){
                $update_block_staus = 0;
            }else{
                $update_block_staus = 1;
            }                      
            if(Block::where('id',$status_arr['data-id'])->first()->update(['status'=>$update_block_staus])){
                return 'status_update';
            }else{
                return 'something went wrong';
            }
        }
        return view('home_page_settings')->with(compact('blocks'));
    }
    public function settings(Request $request,$slug){          
        $slug_arr = explode('-',$slug);
        $block_name = $slug_arr[0];              
        return view('block-settings')->with(compact('slug','block_name'));
    }
    public function SaveSettings(Request $request){       
       $block_arr = $request->input();      
       $slug_arr = explode('-',$block_arr['slug']);
       $block_name = $slug_arr[0];              
       $block_id = $slug_arr[1];
       Block::where('id',$block_id)->first()->update(['status'=>$block_arr['block_status']]);       
       if($block_name = "discount"){
            $discount = new discount;
            $discount->title = $request['title'];
            $discount->sub_title = $request['sub_title'];        
            $discount->image = '/img/default.jpg';
            $discount->discount_detail = 'test';
            $discount->button_settings = 'test';
            $discount->save();
       }
       return redirect()->back();
    }
    public function discount(Request $request){

    }
}
