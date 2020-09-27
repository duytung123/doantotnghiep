<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ADDrequest;
use Illuminate\Support\Str;
use DB;
use App\Product;
use App\Category;
use App\Cateallproduct;

class PhukienController extends Controller
{
	function load_data(Request $request)
	{
		if($request->ajax())
		{
			if($request->prod_id >0)
			{
				$data = DB::table('td_product')
				->where('prod_id', '<', $request->prod_id)
				->where('prod_featured',2)
				->where('prod_cate',4)
				->orderBy('prod_id', 'DESC')
				->limit(4)
				->get();
			}
			else
			{
				$data = DB::table('td_product')
				->where('prod_featured',2)
				->where('prod_cate',4)
				->orderBy('prod_id', 'DESC')
				->limit(4)
				->get();
			}
			$output = '';
			$last_id = '';

			if(!$data->isEmpty())
			{
				foreach($data as $lap)
				{
					$output .= '

					<div class="itemphukien">
					<a class="phukientext" href="'.asset("/detail6/$lap->prod_id/$lap->prod_slug.html").'">
					<img src="'.asset("../storage/app/avatar/$lap->prod_img").'" alt="">
					<div class="bottompk">
					<p>'.number_format($lap->prod_price).'đ</p>
					<p class="sale_1">'.$lap->prod_promotion.'</p>
					<strong>'.$lap->prod_name.'</strong>
					<a class="buy" href="">MUA NGAY</a>
					</div>
					</a>	
					</div>

					';
					$last_id = $lap->prod_id;

				}
				$output .= '
				<div id="load_more">
				<button type="button" name="load_more_button" class="btn form-control btnmore" data-id="'.$last_id.'" id="load_more_button">Xem thêm</button>
				</div>
				';
			}
			else
			{
				$output .= '
				<div id="load_more">
				<button type="button" name="load_more_button" class="btn form-control btnmore">.....</button>
				</div>
				';
			}
			echo $output;
		}


	}

	public function getPhukien()
	{
		$data['prphukien']=Product::where('prod_featured',4)->where('prod_cate',4)->orderBy('prod_id','desc')->take(20)->get();

		// $data['prphukien1']=Product::where('prod_featured',3)->where('prod_cate',4)->orderBy('prod_id','desc')->take(10)->get();
		return view('fontend.Phukien.Phukien',$data);
	}



	public function getindex()
	{
		$data['phukienlist']=DB::table('td_product')->where('prod_cate',4)->join('td_category','td_product.prod_cate','=','td_category.cate_id')->orderBy('prod_id','desc')->get();
		return view('backend.Phukien.Phukien',$data);

	}
	public function getaddphukien()
	{
		$data['catelist']=Category::all();
		return view('backend.Phukien.addphukien',$data);
	}

	public function postaddphukien(Request $request)
	{
		$filename=$request->img->getClientOriginalName();
		$product= new Product;
		$product->prod_name=$request->name;
		$product->prod_slug=Str::slug($request->name);
		$product->prod_img=$filename;
		$product->prod_price=$request->price;
		$product->prod_warranty=$request->warranty;
		$product->prod_promotion=$request->promotion;
		$product->prod_status=$request->status;
		$product->prod_featured=$request->featured;
		$product->prod_condition=$request->condition;
		$product->prod_description=$request->description;
		$product->prod_cate=$request->cate;
		$product->prod_cateall=$request->cateall;
		$product->save();
		$request->img->storeAs('avatar',$filename);
		return redirect('admin/phukien/add')->with('thongbao','bạn đã thêm thành công');

	}

	public function getupdatephukien(Request $request,$id)
	{
		$data['edit']=Product::find($id);
		return view ('backend.Phukien.editphukien',$data);
	}

	public function postupdatephukien(ADDrequest $request,$id)
	{
		$product=new Product;
		$arr['prod_name']=$request->name;
		$arr['prod_slug']=Str::slug($request->name);
		$arr['prod_warranty']=$request->warranty;
		$arr['prod_condition']=$request->condition;
		$arr['prod_status']=$request->status;
		$arr['prod_promotion']=$request->promotion;
		$arr['prod_featured']=$request->featured;
		$arr['prod_description']=$request->description;
		$arr['prod_price']=$request->price;
		$arr['prod_cate']=$request->cate;
		if($request->hasFile('img')){
			$img=$request->img->getClientOriginalName();
			$arr['prod_img']=$img;
			$request->img->move('avatar'.$img);
		}

		$product::where('prod_id',$id)->update($arr);
		return redirect('admin/phukien')->with('thongbao','bạn đã sửa thành công');
	}
	public function getdeletephukien($id)
	{
		Product::destroy($id);
		return back();
	}
}
