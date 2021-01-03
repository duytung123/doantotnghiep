<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Product;

class PhoneController extends Controller
{

    function load_data(Request $request)
    {
        if ($request->ajax())
        {
            if ($request->prod_id > 0)
            {
                $data = DB::table('td_product')->where('prod_id', '<', $request->prod_id)
                    ->where('prod_featured', 4)
                    ->where('prod_cate', 1)
                    ->orderBy('prod_id', 'DESC')
                    ->limit(5)
                    ->get();
            }
            else
            {
                $data = DB::table('td_product')->where('prod_featured', 4)
                    ->where('prod_cate', 1)
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
    public function getPhone()
    {
        $data['product1'] = Product::where('prod_featured', 1)->where('prod_cate', 1)
            ->orderBy('prod_id', 'desc')
            ->take(1)
            ->get();

        $data1['product'] = Product::where('prod_featured', 3)->where('prod_cate', 1)
            ->orderBy('prod_id', 'desc')
            ->take(1)
            ->get();
        // san pham phone sale1s
        $data1['product2'] = Product::where('prod_featured', 0)->where('prod_cate', 1)
            ->orderBy('prod_id', 'desc')
            ->take(3)
            ->get();

        $data['product3'] = Product::where('prod_featured', 4)->where('prod_cate', 1)
            ->orderBy('prod_id', 'desc')
            ->take(0)
            ->get();

        $data1['product4'] = Product::where('prod_featured', 2)->where('prod_cate', 1)
            ->orderBy('prod_id', 'desc')
            ->take(3)
            ->get();

        return view('fontend.Phone.Phone', $data, $data1);
    }

        // chon gia san pham
    public function price1()
    {
        $data['product']=Product::where('prod_price','<',2000000)->where('prod_cate',1)->orderBy('prod_id','desc')->paginate(4);
        return view('fontend.Phone.ListPrice',$data);
    }

    public function price2()
    {
        $data['product']=Product::whereBetween('prod_price',[2000000,4000000])->where('prod_cate',1)->orderBy('prod_id','desc')->paginate(4);
        return view('fontend.Phone.ListPrice',$data);
    }

    public function price3()
    {
        $data['product']=Product::whereBetween('prod_price',[4000000,7000000])->where('prod_cate',1)->orderBy('prod_id','desc')->paginate(5);
        return view('fontend.Phone.ListPrice',$data);
    }

    public function price4()
    {
        $data['product']=Product::whereBetween('prod_price',[7000000,13000000])->where('prod_cate',1)->orderBy('prod_id','desc')->paginate(5);
        return view('fontend.Phone.ListPrice',$data);
    }

    public function price5()
    {
        $data['product']=Product::where('prod_price','>',13000000)->where('prod_cate',1)->orderBy('prod_id','desc')->paginate(5);
        return view('fontend.Phone.ListPrice',$data);
    }
}

