<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Category;
use App\Cateallproduct;

class CategoryController extends Controller
{
    public function getcate()

    {

    	$data['catelist']= Category::all();
    	return view('backend.Category.category',$data);
    }
    public function getaddcate()
    {
    	return view('backend.Category.addcategory');
    }
    public function postaddcate(Request $request)
    {
        $this->validate($request,
           [
            'name'=>'unique:td_category,cate_name'

        ],
        [
            'name.unique'=>'tên bạn nhập đã trùng'

        ]);

        $category= new Category;
        $category->cate_name=$request->name;
        $category->cate_slug=Str::slug($request->name);
        $category->save();

        return redirect('admin/category')->with('thongbao','Thêm thành công');
    }
    public function getupdatecate($id)
    {
        $data['cate']=Category::find($id);
        return view('backend.Category.editcate',$data);
    }
    public function postupdatecate( Request $request,$id)
    {
        $this->validate($request,
            [
                'name'=>'unique:td_category,cate_name'
            ],

            [
                'name.unique'=>'tên bạn nhập đã trùng'
            ]);

        $category= Category::find($id);
        $category->cate_name=$request->name;
        $category->cate_slug=Str::slug($request->name);
        $category->save();

        return redirect('admin/category/')->with('thongbao','sửa thành công :)');

    }
    public function getdeletecate($id)
    {

    	Category::destroy($id);

    	return back();
    }
      // end cate cho trang chu

    public function getcateall()

    {

        $data['cateall']= Cateallproduct::all();
        return view('backend.Cateallproduct.Cateallproduct',$data);
    }
    public function getaddcateall()
    {

        return view('backend.Cateallproduct.addcateall');
    }

    public function postaddcateall(Request $request)
    {
         $this->validate($request,
           [
            'name'=>'unique:td_cateallproduct,cateall_name'

        ],
        [
            'name.unique'=>'tên bạn nhập đã trùng'

        ]);
        $filename=$request->img->getClientOriginalName();
        $category= new Cateallproduct;
        $category->cateall_name=$request->name;
        $category->cateall_slug=Str::slug($request->name);
        $category->cateall_product=$request->cate;
        $category->cateall_img=$filename;
        $category->save();
        $request->img->storeAs('avatar',$filename);
        return redirect('admin/cateallproduct')->with('thongbao','Thêm thành công');
    }

    public function getupdatecateall($id)
    {
        $data['cateall2']=Cateallproduct::find($id);
        return view('backend.Cateallproduct.editcateall',$data);
    }

    public function postupdatecateall( Request $request,$id)
    {
       $category= Cateallproduct::find($id);
        $arr['cateall_name']=$request->name;
        $arr['cateall_slug']=Str::slug($request->name);
        $arr['cateall_product']=$request->cate;
        if($request->hasFile('img')){
            $img=$request->img->getClientOriginalName();
            $arr['cateall_img']=$img;
            $request->img->storeAs('avatar',$img);
        }

        $category::where('cateall_id',$id)->update($arr);

        return redirect('admin/cateallproduct')->with('thongbao','sửa thành công :)');

    }
        public function getdeletecateall($id)
    {
        Cateallproduct::destroy($id);
        return back();
    }
    
}
