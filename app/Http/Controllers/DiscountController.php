<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DiscountOffer;
use App\Models\Block;

class DiscountController extends Controller
{
    public function index(Request $request){        
        $blockStatus = Block::where('name','Discount')->select(['status','value'])->get()->first();               
        if($request->isMethod('Post')){
            $status = $request->input('status');
            $values = ['title'=>$request->input('title'),'sub_title'=>$request->input('sub_title')];
            $discount_arr = [
                'status' => $status,
                'value' => $values,
            ];
            Block::where('name','Discount')->update($discount_arr);             
        }
        return view('blocks.discount.index')->with(compact('blockStatus'));
    }
    public function show(Request $request){       
        $discount_arr = DiscountOffer::all();     
        if($request->post()){
            $heading_arr = [$request->input('title'),$request->input('sub_title')];
            Block::where('name','Discount')->update('value', $heading_arr); 
        }  
        return view('blocks.discount.show')->with(compact('discount_arr'));
    }
    public function add(Request $request){        
        $discount_arr = $request->only(["button_text","discount_title","discount_price","image"]);
        $DiscountOffer = new DiscountOffer;
        $DiscountOffer->discout_title= $discount_arr['discount_title'];
        $DiscountOffer->discount_price= $discount_arr['discount_price'];        
        $DiscountOffer->image=  $discount_arr['image'];
        $DiscountOffer->block_color= "test";
        $DiscountOffer->button_settings= $discount_arr['discount_price'];
        if($DiscountOffer->save()){
            $last_record = \json_encode(DiscountOffer::all()->last());
            $msg = 'suc';
            $result = ['last_record'=>$last_record,'msg'=>$msg];
            return $result;
        }else{
            return 'err';
        }            
    }
    public function update(Request $request){
        $discount_arr = $request->only(["button_text","discount_title","discount_price","id","image"]);
        $DiscountOffer = DiscountOffer::find($discount_arr['id']);        
        $DiscountOffer->discout_title= $discount_arr['discount_title'];
        if(!strpos($discount_arr['discount_price'],'% off')){
            $discount_arr['discount_price'] = $discount_arr['discount_price'].'% Off';
        }
        $DiscountOffer->discount_price= $discount_arr['discount_price'];        
        $DiscountOffer->image=  $discount_arr['image'];
        $DiscountOffer->block_color= "test";
        $DiscountOffer->button_settings= $discount_arr['discount_price'];
        if($DiscountOffer->save()){            
            $msg = 'suc';
            $result = ['msg'=>$msg];
            return $result;
        }else{
            return 'err';
        }            
    }
    public function delete($id){        
        $discountOffer = DiscountOffer::find($id);
        if($discountOffer->delete()){
            return 'suc';
        }        
    }
    public function UploadImage(Request $request){                                              
        if($request->hasFile('product_image')){
            $file = $request->file('product_image');    
            $allow_extension = ['jpg','jpg','png','gif'];
            $file_name = time().'_'.$file->getClientOriginalName();
            $file_extension = $file->getClientOriginalExtension();            
            if(in_array($file_extension,$allow_extension)){
                if($file->move('img/upload/discount_products',$file_name)){                    
                    $output = ['file_name'=>$file_name,'message'=>'success'];                    
                    return $output;
                }
            }          
        }        
    }
}
