<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Watch;
use App\Http\Requests\ADDrequest;
use Illuminate\Support\Str;
use DB;
use App\Product;
use App\Category;
use App\Cateallproduct;


class WatchController extends Controller
{
    function load_data(Request $request)
    {
        if ($request->ajax())
        {
            if ($request->prod_id > 0)
            {
                $data = DB::table('td_product')->where('prod_id', '<', $request->prod_id)
                ->where('prod_featured', 4)
                ->where('prod_cate', 5)
                ->orderBy('prod_id', 'DESC')
                ->limit(5)
                ->get();
            }
            else
            {
                $data = DB::table('td_product')->where('prod_featured', 4)
                ->where('prod_cate', 5)
                ->orderBy('prod_id', 'DESC')
                ->limit(5)
                ->get();
            }
            $output = '';
            $last_id = '';

            if (!$data->isEmpty())
            {
                foreach ($data as $lap)
                {
                    $output .= '
                    <div class="smart_all">
                    <div class="smart_detail">
                    <label>trả góp 0%</label>
                    <div class="imgdetail">
                    <a class="click1" href="' . asset("/detail7/$lap->prod_id/$lap->prod_slug.html") . '">
                    <img class="h2 h2a" src="' . asset("../storage/app/avatar/$lap->prod_img") . '" alt="">
                    <div class="sdas">
                    <a class="text">
                    <p class="name">' . $lap->prod_name . '</p>
                    <p class="price" >' . number_format($lap->prod_price) . 'đ</p>
                    <p class="note">' . $lap->prod_description . '</p> 
                    </a>
                    </div>
                    </a>
                    </div>
                    </div> 
                    </div>
                    ';
                    $last_id = $lap->prod_id;

                }
                $output .= '
                <div id="load_more">
                <button type="button" name="load_more_button" class="btn form-control btnmore" data-id="' . $last_id . '" id="load_more_button">Xem thêm</button>
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

    public function index()
    {
    	$data['watchpr'] = Product::where('prod_featured',1)->where('prod_cate',5)
        ->orderBy('prod_id','desc')
        ->take(5)
        ->get();
        return view('fontend.Watch.Watch',$data);
    }

    public function getindex()
    {
        $data['watchlist'] = DB::table('td_product')->where('prod_cate',5)
        ->join('td_category', 'td_product.prod_cate', '=', 'td_category.cate_id')
        ->orderBy('prod_id', 'desc')
        ->get();
        return view('backend.Watch.Watch',$data);

    }
    public function getaddwatch()
    {
        $data['catelist'] = Category::all();
        return view('backend.Watch.AddWatch', $data);
    }

    public function postaddwatch(Request $request)
    {
        $filename = $request
        ->img
        ->getClientOriginalName();
        $product = new Product;
        $product->prod_name = $request->name;
        $product->prod_slug = Str::slug($request->name);
        $product->prod_img = $filename;
        $product->prod_price = $request->price;
        $product->prod_warranty = $request->warranty;
        $product->prod_promotion = $request->promotion;
        $product->prod_status = $request->status;
        $product->prod_number = $request->number;
        $product->prod_featured = $request->featured;
        $product->prod_condition = $request->condition;
        $product->prod_description = $request->description;
        $product->prod_cate = $request->cate;
        // $product->prod_cateall = $request->cateall;
        $product->save();
        $request
        ->img
        ->storeAs('avatar', $filename);
        return redirect('admin/watch/add')->with('thongbao', 'bạn đã thêm thành công');

    }

    public function getupdatewatch(Request $request, $id)
    {
        $data['edit'] = Product::find($id);
        return view('backend.Watch.EditWatch', $data);
    }

    public function postupdatewatch(ADDrequest $request, $id)
    {
        $product = new Product;
        $arr['prod_name'] = $request->name;
        $arr['prod_slug'] = Str::slug($request->name);
        $arr['prod_warranty'] = $request->warranty;
        $arr['prod_condition'] = $request->condition;
        $arr['prod_status'] = $request->status;
        $arr['prod_promotion'] = $request->promotion;
        $arr['prod_featured'] = $request->featured;
        $arr['prod_number'] = $request->number;
        $arr['prod_description'] = $request->description;
        $arr['prod_price'] = $request->price;
        $arr['prod_cate'] = $request->cate;
        if ($request->hasFile('img'))
        {
            $img = $request
            ->img
            ->getClientOriginalName();
            $arr['prod_img'] = $img;
            $request
            ->img
            ->move('avatar' . $img);
        }

        $product::where('prod_id', $id)->update($arr);
        return redirect('admin/watch')->with('thongbao', 'bạn đã sửa thành công');
    }
    public function getdeletewatch($id)
    {
        Product::destroy($id);
        return back();
    }

        // chon gia san pham
    public function price1()
    {
      $data['product']=Product::where('prod_price','<',10000000)->where('prod_cate',2)->orderBy('prod_id','desc')->paginate(5);
      return view('fontend.Laptop.ListPrice',$data);
  }

  public function price2()
  {
      $data['product']=Product::whereBetween('prod_price',[10000000,15000000])->where('prod_cate',2)->orderBy('prod_id','desc')->paginate(5);
      return view('fontend.Laptop.ListPrice',$data);
  }

  public function price3()
  {
      $data['product']=Product::whereBetween('prod_price',[15000000,20000000])->where('prod_cate',2)->orderBy('prod_id','desc')->paginate(5);
      return view('fontend.Laptop.ListPrice',$data);
  }

  public function price4()
  {
      $data['product']=Product::whereBetween('prod_price',[20000000,25000000])->where('prod_cate',2)->orderBy('prod_id','desc')->paginate(5);
      return view('fontend.Laptop.ListPrice',$data);
  }

  public function price5()
  {
      $data['product']=Product::where('prod_price','>',25000000)->where('prod_cate',2)->orderBy('prod_id','desc')->paginate(5);
      return view('fontend.Laptop.ListPrice',$data);
  }
}