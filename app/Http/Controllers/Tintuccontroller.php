<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Tintuc;
use DB;
use Auth;

class Tintuccontroller extends Controller
{
	public function getDetailtintuc($id)
	{
		$data1['chitiet']=Tintuc::find($id);
		return view('fontend.TinTuc.detail',$data1);
	}

	public function getindex()
	{
		$data['tintuc']=Tintuc::all();
		return view('fontend.TinTuc.Tintuc',$data);
	}
	public function getList_news()
	{
		$data['tintuc']=Tintuc::all();
		
		return view('backend.News.News',$data);
	}
	public function getaddnews()
	{
		return view('backend.News.Addnews');
	}
	public function postaddnews(Request $request)
	{

		

		$this->validate($request,
			[
				'title'=>'required|min:3|unique:td_tintuc,n_title,descripton',
				'descripton'=>'required',
				'content'=>'required'
			],
			[
				'title.required'=>'Bạn chưa chọn tiêu đề',
				'title.min'=>'Tiêu đề phải ít nhất có 3 ký tự',
				'descripton.required'=>'Bạn chưa nhập tóm tắt',
				'title.unique'=>'Tiêu đề đã tồn tại',
				'content.required'=>'Bạn chưa nhập nội dung'
			]);

		$tintuc=new Tintuc;
		$filename=$request->img->getClientOriginalName();
		$tintuc->n_title=$request->title;
		$tintuc->n_contentslug=Str::slug($request->title);
		$tintuc->n_description=$request->descripton;
		$tintuc->n_content=$request->content;
		$tintuc->n_img=$filename;
		$tintuc->n_featured=$request->featured;
		$tintuc->n_author=$request->author;
		$tintuc->n_view=0;
		$tintuc->save();
		$request->img->storeAs('avatar',$filename);
		return redirect('admin/news')->with('thongbao','Bạn đã thêm tin thành công');
		
	}

	    public function geteditnews($id)
    {
        $data['edit']=Tintuc::find($id);

        return view('backend.News.editnews',$data);
        
    }

        public function posteditnews(Request $request,$id)
    {

		$tintuc=new Tintuc;
        $arr['n_title']=$request->title;
        $arr['n_contentslug']=Str::slug($request->title);
        $arr['n_content']=$request->content;
        $arr['n_author']=$request->author;
        $arr['n_featured']=$request->featured;
        $arr['n_description']=$request->descripton;
        if($request->hasFile('img')){
            $img=$request->img->getClientOriginalName();
            $arr['n_img']=$img;
            $request->img->move('avatar'.$img);
        }
         $tintuc::where('id',$id)->update($arr);

        return redirect('admin/news/add')->with('thongbao','bạn đã sửa thành công');
    }
    public function getdeletenews($id)
    {
    	Tintuc::destroy($id);
    	return back();
    }
}
