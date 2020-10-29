<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Attribute;
use App\Product;
class AttributeController extends Controller
{
    public function getAttribute(Request $request,$id)
    {
    	// if($request->isMethod('post')){
    	// 	$data=$request->all();
    	// 	echo "pre"; print_r($data);die;
    	// }

    	$data['edit113'] = Product::find($id);
    	return view('backend.Product.Attribute',$data);
    }
    public function addAttribute(Request $request,$id)
    {
    	if($request->isMethod('post')){
    		$data=$request->all();
    		//echo "pre"; print_r($data);die;
    		foreach ($data['at_screen'] as $key => $value) {
    			if(!empty($value)){
    				$attibute=new Attribute;

    				$attibute->at_product_id=$id;
    				$attibute->at_screen=$value;
    				$attibute->save();

    			}
    		}
    	}

    	$data['edit113'] = Product::find($id);
    	return view('backend.Product.Attribute',$data);
    }
}
