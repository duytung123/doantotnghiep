<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Category;

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
    
}
