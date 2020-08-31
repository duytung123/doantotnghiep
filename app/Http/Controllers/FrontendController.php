<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\Category;
use DB;
class FrontendController extends Controller
{
	public function getHome()
	{
		$data['phukien']=Product::where('prod_featured',0)->Where('prod_cate',4)->orderBy('prod_id','desc')->take(10)->get();

		$data['phukien2']=Product::where('prod_featured',2)->Where('prod_cate',4)->orderBy('prod_id','desc')->take(10)->get();

		$data['featured']=Product::where('prod_featured',3)->Where('prod_cate',1)->orderBy('prod_id','desc')->take(1)->get();
		$data['featured1']=Product::where('prod_featured',1)->Where('prod_cate',1)->orderBy('prod_id','desc')->take(1)->get();

		$data['new2']=Product::where('prod_featured',0)->Where('prod_cate',1)->orderBy('prod_id','desc')->take(3)->get();
		$data['new1']=Product::where('prod_featured',2)->Where('prod_cate',1)->orderBy('prod_id','desc')->take(3)->get();

		$data['laptop']=Product::where('prod_featured',2)->Where('prod_cate',2)->orderBy('prod_id','desc')->take(3)->get();

		$data['laptop2']=Product::where('prod_featured',1)->Where('prod_cate',2)->orderBy('prod_id','desc')->take(3)->get();

		$data['tablet']=Product::where('prod_featured',0)->Where('prod_cate',3)->orderBy('prod_id','desc')->take(1)->get();
		$data['tablet2']=Product::where('prod_featured',1)->Where('prod_cate',3)->orderBy('prod_id','desc')->take(3)->get();

		return view('fontend.index',$data);
	}

}
