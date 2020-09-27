<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\Category;
use App\Cateallproduct;
use DB;
class FrontendController extends Controller
{
	// lay sp theo danh muc điện thoại
	public function getcateallproduct($id)
	{

		$data['catname']=Cateallproduct::find($id);
		$data['product']=Product::where('prod_cateall',$id)->where('prod_cate',1)->orderBy('prod_id','desc')->paginate(20);
		return view('fontend.Phone.catelistproduct',$data);
	}
	public function getHome()
	{
		$data['phukien']=Product::where('prod_featured',0)->Where('prod_cate',4)->orderBy('prod_id','desc')->take(10)->get();

		$data['phukien2']=Product::where('prod_featured',2)->Where('prod_cate',4)->orderBy('prod_id','desc')->take(10)->get();

		$data['featured']=Product::where('prod_featured',3)->Where('prod_cate',1)->orderBy('prod_id','desc')->take(1)->get();
		$data['featured1']=Product::where('prod_featured',1)->Where('prod_cate',1)->orderBy('prod_id','desc')->take(1)->get();

		$data['new2']=Product::where('prod_featured',0)->Where('prod_cate',1)->orderBy('prod_id','desc')->take(3)->get();
		$data['new1']=Product::where('prod_featured',2)->Where('prod_cate',1)->orderBy('prod_id','desc')->take(3)->get();

		$data['laptop']=Product::where('prod_featured',2)->Where('prod_cate',2)->orderBy('prod_id','desc')->take(3)->get();

		$data['laptop1']=Product::where('prod_featured',3)->Where('prod_cate',2)->orderBy('prod_id','desc')->take(1)->get();

		$data['laptop2']=Product::where('prod_featured',1)->Where('prod_cate',2)->orderBy('prod_id','desc')->take(3)->get();

		$data['tablet']=Product::where('prod_featured',0)->Where('prod_cate',3)->orderBy('prod_id','desc')->take(1)->get();
		$data['tablet2']=Product::where('prod_featured',1)->Where('prod_cate',3)->orderBy('prod_id','desc')->take(3)->get();

		return view('fontend.index',$data);
	}
	public function autocompletajax(Request $request)
	{
		$data=$request->all();
		if($data['query'])
		{
			$product = Product::where('prod_name','LIKE','%'.$data['query'].'%')->get();
			$output='<ul class="dropdown-menu" style="display:block;z-index:1;width:max-content;padding:5px 15px;margin: 2px 99px;">';
			foreach ($product as $key => $value) {
				$output .='<li><a href="'.asset("/detail/$value->prod_id/$value->prod_slug.html").'">
				<img style=width:90px;height:75px; src="'.asset("../storage/app/avatar/$value->prod_img").'" alt="">
				'.$value->prod_name.''.$value->prod_description.'</a></li>';
			}
			$output .='</ul>';
			echo $output;

		}



	}
	

}
