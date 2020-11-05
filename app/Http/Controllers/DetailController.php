<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Product;
use App\Comments;
use App\Rating;


class DetailController extends Controller
{
	public function getDetailphone($id)
	{
		$data['cate']=Product::find($id);
		$data['comment']=Comments::where('cm_product',$id)->get();
		$data['phukien'] = Product::where('prod_featured',4)->Where('prod_cate',1)
		->orderBy('prod_id', 'desc')
		->take(5)
		->get();
		$data['rating']=Rating::where('r_product_id',$id)->take(5)->get();

		return view('fontend.Phone.Detailphone',$data);

	}
	public function getDetaillaptop($id)
	{
		$data['cate']=Product::find($id);
		$data['comment']=Comments::where('cm_product',$id)->get();
		$data['rating']=Rating::where('r_product_id',$id)->take(5)->get();
		$data['phukien'] = Product::where('prod_featured',4)->Where('prod_cate',2)
		->orderBy('prod_id', 'desc')
		->take(5)
		->get();
		return view('fontend.Laptop.Detaillaptop',$data);

	}
	public function getDetailtablet($id)
	{
		$data['cate']=Product::find($id);
		$data['comment']=Comments::where('cm_product',$id)->get();
		$data['rating']=Rating::where('r_product_id',$id)->take(5)->get();
		$data['phukien'] = Product::where('prod_featured',4)->Where('prod_cate',3)
		->orderBy('prod_id', 'desc')
		->take(5)
		->get();
		return view('fontend.Tablet.Detailtablet',$data);

	}
	public function getDetailpkien($id)
	{
		$data['cate']=Product::find($id);
		$data['comment']=Comments::where('cm_product',$id)->get();
		$data['rating']=Rating::where('r_product_id',$id)->take(5)->get();
		$data['phukien'] = Product::where('prod_featured',4)->Where('prod_cate',4)
		->orderBy('prod_id', 'desc')
		->take(5)
		->get();
		return view('fontend.Phukien.Detailpkien',$data);

	}

	public function postComment(Request $request,$id)
	{
		$comment=new Comments;
		$comment->cm_name=$request->name;
		$comment->cm_email=$request->email;
		$comment->cm_content=$request->content;
		$comment->cm_product=$id;
		$comment->save();
		return back();
	}
}
