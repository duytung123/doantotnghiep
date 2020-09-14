<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\ADDrequest;
use DB;
use App\Category;
use App\Product;

  class LaptopController extends Controller
  {

    function load_data(Request $request)
    {
      if($request->ajax())
      {
        if($request->prod_id >0)
        {
          $data = DB::table('td_product')
          ->where('prod_id', '<', $request->prod_id)
          ->where('prod_featured',1)
          ->where('prod_cate',2)
          ->orderBy('prod_id', 'DESC')
          ->limit(5)
          ->get();
        }
        else
        {
          $data = DB::table('td_product')
          ->where('prod_featured',1)
          ->where('prod_cate',2)
          ->orderBy('prod_id', 'DESC')
          ->limit(5)
          ->get();
        }
        $output = '';
        $last_id = '';

        if(!$data->isEmpty())
        {
          foreach($data as $lap)
          {
            $output .= '
            <div class="tong2">
            <div class="hinh2">
            <a class="click1" href="'.asset("/detail2/$lap->prod_id/$lap->prod_slug.html").'">
            <img class="h2 h2a" src="'.asset("../storage/app/avatar/$lap->prod_img").'" alt="">
            <div class="con1">
            <h3>'.$lap->prod_name.'</h3>
            <strong>'.number_format($lap->prod_price).'đ</strong>
            <p>'.$lap->prod_description.'</p> 
            </div>
            </a>
            </div>
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
      //frontend

    public function getHome()
    {
      $data['laptopsale']=Product::where('prod_featured',4)->Where('prod_cate',2)->orderBy('prod_id','desc')->take(10)->get();
           // laptop gia soc
      $data['laptop']=Product::where('prod_featured',2)->Where('prod_cate',2)->orderBy('prod_id','desc')->take(1)->get();

      $data['laptop2']=Product::where('prod_featured',3)->Where('prod_cate',2)->orderBy('prod_id','desc')->take(1)->get();

      $data['laptop4']=Product::where('prod_featured',0)->Where('prod_cate',2)->orderBy('prod_id','desc')->take(3)->get();



      $data['laptop1']=Product::where('prod_featured',1)->Where('prod_cate',2)->orderBy('prod_id','desc')->take(3)->get();
      $data['laptop3']=Product::where('prod_featured',1)->where('prod_cate',2)->orderBy('prod_id','desc')->take(0)->get();

      return view('fontend.Laptop.Laptop',$data);
    }
      //backend
    public function getlaptop()
    {
      $data['laptoplist']=DB::table('td_product')->where('prod_cate',2)->join('td_category','td_product.prod_cate','=','td_category.cate_id')->orderBy('prod_id','desc')->get();
      return view('backend.Laptop.laptop',$data);

    }
    public function getaddlaptop()
    {
     $data['catelist']=Category::all();
     return view('backend.Laptop.addlaptop',$data);
   }

   public function postaddlaptop(Request $request)
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
     return redirect('admin/laptop/add')->with('thongbao','bạn đã thêm thành công');

   }

   public function getupdatelaptop(Request $request,$id)
   {
    $data['edit']=Product::find($id);
    return view ('backend.Laptop.editlaptop',$data);
  }

  public function postupdatelaptop(ADDrequest $request,$id)
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
    return redirect('admin/product')->with('thongbao','bạn đã sửa thành công');
  }
  public function getdeletelaptop($id)
  {
    Product::destroy($id);
    return back();
  }

}
