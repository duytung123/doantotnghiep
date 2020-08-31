<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Product;

class PhukienController extends Controller
{
	public function getPhukien()
	{
		$data['prphukien']=Product::where('prod_featured',4)->where('prod_cate',4)->orderBy('prod_id','desc')->take(20)->get();

		// $data['prphukien1']=Product::where('prod_featured',3)->where('prod_cate',4)->orderBy('prod_id','desc')->take(10)->get();
		return view('fontend.Phukien.Phukien',$data);
	}
}
