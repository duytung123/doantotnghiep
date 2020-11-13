<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\MCustomer;

class UserController extends Controller
{
    //     public function __construct()
    // {
    //     $this->middleware('guest:customer');
    // }
    public function getList_user()
    {
    	$users=User::all();
    	return view('backend.User.DanhsachUser',['users'=>$users]);

    }
    public function getadduser()
    {	
    	return view('backend.User.Adduser');
    }

    public function postadduser(Request $request)
    {
    	$this->validate($request,
        [

            'email'=>'required|unique:td_user,email',
            'password'=>'required|min:3|max:20',
            'passwordAgain'=>'required|same:password'
        ],
        
        [

            'email.required'=>'Bạn chưa nhập email',
            'email.email'=>'Bạn chưa nhập đúng định dạng email',
            'email.unique'=>'Email bạn nhập đã tồn tại',
            'password.required'=>'Bạn chưa nhập mật khẩu',
            'password.min'=>'Mật khẩu phải có ít nhất 3 ký tự',
            'password.max'=>'Mật khẩu không quá 20 ký tự',
            'passwordAgain.same'=>'Mật khẩu nhập lại chưa khớp với mật khẩu trên'

        ]);

        $users=new User;
        $users->email=$request->email;
        $users->password=bcrypt($request->password);
        $users->level=$request->level;
        $users->save();

        return redirect('admin/user')->with('thongbao','Bạn đã thêm thành công');

    }
    public function getediteuser($id)
    {
    	$users=User::find($id);
        return view('backend.User.Edituser',['users'=>$users]);
    }
      public function postedituser(Request $request, $id)
    {

        $users=User::find($id);

        $users->level=$request->level;


        if($request->changePassword =="on")
        {
             $this->validate($request,
        [
            'password'=>'required|min:6|max:20',
            'passwordAgain'=>'required|same:password'
        ],
        
        [
            
            'password.required'=>'Bạn chưa nhập mật khẩu',
            'password.min'=>'Mật khẩu phải có ít nhất 6 ký tự',
            'password.max'=>'Mật khẩu không quá 20 ký tự',
            'passwordAgain.same'=>'Mật khẩu nhập lại chưa khớp với mật khẩu trên'

        ]);

         $users->password=bcrypt($request->password);

        }
  
        $users->save();
        return redirect('admin/user')->with('thongbao','Bạn đã sửa thành công');
 	  
    }
  
    public function getdeleteuser($id)
    {
    	$users=User::find($id);
        $users->delete();

        return redirect('admin/user')->with('thongbao','Bạn đã xóa thành công');
    }


}
