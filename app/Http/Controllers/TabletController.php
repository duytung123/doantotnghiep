<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
use App\Product;
use App\Http\Requests\ADDrequest;
use App\Category;
use App\Cateallproduct;

class TabletController extends Controller
{

    function load_data(Request $request)
    {
        if ($request->ajax())
        {
            if ($request->prod_id > 0)
            {
                $data = DB::table('td_product')->where('prod_id', '<', $request->prod_id)
                    ->where('prod_featured', 4)
                    ->where('prod_cate', 3)
                    ->orderBy('prod_id', 'DESC')
                    ->limit(5)
                    ->get();
            }
            else
            {
                $data = DB::table('td_product')->where('prod_featured', 4)
                    ->where('prod_cate', 3)
                    ->orderBy('prod_id', 'DESC')
                    ->limit(5)
                    ->get();
            }
            $output = '';
            $last_id = '';

            if (!$data->isEmpty())
            {
                foreach ($data as $phone)
                {
                    $output .= '
					<div class="tong2">
					<div class="hinh2">
					<a class="click1" href="' . asset("/detail/$phone->prod_id/$phone->prod_slug.html") . '">
					<img class="h2" src="' . asset("../storage/app/avatar/$phone->prod_img") . '" alt="">
					<div class="con1">
					<h3>' . $phone->prod_name . '</h3>
					<strong>' . number_format($phone->prod_price) . 'đ</strong>
					' . $phone->prod_description . '
					</div>
					</a>
					</div>
					</div> 
					';
                    $last_id = $phone->prod_id;

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
    public function getHome()
    {

        $data['tablet'] = Product::where('prod_featured', 3)->where('prod_cate', 3)
            ->orderBy('prod_id', 'desc')
            ->take(1)
            ->get();

        $data['tablet2'] = Product::where('prod_featured', 0)->where('prod_cate', 3)
            ->orderBy('prod_id', 'desc')
            ->take(1)
            ->get();
        // SAN PHAM DAU TIEN
        $data['tablet1'] = Product::where('prod_featured', 1)->where('prod_cate', 3)
            ->orderBy('prod_id', 'desc')
            ->take(3)
            ->get();

        $data['tablet3'] = Product::where('prod_featured', 2)->where('prod_cate', 3)
            ->orderBy('prod_id', 'desc')
            ->take(3)
            ->get();

        $data['tablet4'] = Product::where('prod_featured', 4)->where('prod_cate', 3)
            ->orderBy('prod_id', 'desc')
            ->take(0)
            ->get();
        // lay 3 san pham tiep theo
        

        return view('fontend.Tablet.Tablet', $data);
    }
    //backend
    public function gettablet()
    {
        $data['tabletlist'] = DB::table('td_product')->where('prod_cate', 3)
            ->join('td_category', 'td_product.prod_cate', '=', 'td_category.cate_id')
            ->orderBy('prod_id', 'desc')
            ->get();
        return view('backend.Tablet.tablet', $data);

    }
    public function getaddtablet()
    {
        $data['catelist'] = Category::all();
        return view('backend.Tablet.addtablet', $data);
    }

    public function postaddtablet(ADDrequest $request)
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
        $product->prod_featured = $request->featured;
        $product->prod_condition = $request->condition;
        $product->prod_description = $request->description;
        $product->prod_cate = $request->cate;
        $product->prod_cateall = $request->cateall;
        $product->save();
        $request
            ->img
            ->storeAs('avatar', $filename);
        return redirect('admin/tablet/add')->with('thongbao', 'bạn đã thêm thành công');

    }

    public function getupdatetablet(Request $request, $id)
    {
        $data['edit'] = Product::find($id);
        return view('backend.Tablet.edittablet', $data);
    }

    public function postupdatetablet(ADDrequest $request, $id)
    {
        $product = new Product;
        $arr['prod_name'] = $request->name;
        $arr['prod_slug'] = Str::slug($request->name);
        $arr['prod_warranty'] = $request->warranty;
        $arr['prod_condition'] = $request->condition;
        $arr['prod_status'] = $request->status;
        $arr['prod_promotion'] = $request->promotion;
        $arr['prod_featured'] = $request->featured;
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
        return redirect('admin/tablet')->with('thongbao', 'bạn đã sửa thành công');
    }
    public function getdeletetablet($id)
    {
        Product::destroy($id);
        return back();
    }

        // chon gia san pham
public function price1()
{
  $data['product']=Product::where('prod_price','<',3000000)->where('prod_cate',3)->orderBy('prod_id','desc')->paginate(4);
  return view('fontend.Tablet.ListPrice',$data);
}

public function price2()
{
  $data['product']=Product::whereBetween('prod_price',[3000000,7000000])->where('prod_cate',3)->orderBy('prod_id','desc')->paginate(4);
  return view('fontend.Tablet.ListPrice',$data);
}

public function price3()
{
  $data['product']=Product::where('prod_price','>',13000000)->where('prod_cate',3)->orderBy('prod_id','desc')->paginate(4);
  return view('fontend.Tablet.ListPrice',$data);
}

}

