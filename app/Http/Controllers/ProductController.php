<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\ADDrequest;
use App\Product;
use App\Category;
use DB;
use Auth;
class ProductController extends Controller
{
    public function getproduct()
    {
        $data['productlist']=DB::table('td_product')->join('td_category','td_product.prod_cate','=','td_category.cate_id')->orderBy('prod_id','desc')->get();
        return view('backend.Product.Product',$data);
    }
    public function getaddproduct()
    {
        $data['catelist']=Category::all();
        return view('backend.Product.Addproduct',$data);
    }
    public function postaddproduct(ADDrequest $request)
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
        $product->save();
        $request->img->storeAs('avatar',$filename);
        return redirect('admin/product/add')->with('thongbao','bạn đã thêm thành công');
    }
    public function getupdateproduct($id)
    {
        $data['edit']=Product::find($id);
        $data1['listedit']=Category::all();
        return view('backend.Product.editproduct',$data,$data1);
        
    }
    public function postupdateproduct(ADDrequest $request,$id)
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
    public function getdeleteproduct($id)
    {
        Product::destroy($id);

        return back();
        
    }
}