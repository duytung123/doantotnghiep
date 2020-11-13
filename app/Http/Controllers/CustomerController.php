<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\MCustomer;

class CustomerController extends Controller
{
	 public function postaddcustomer(Request $request)
    {
    	$this->validate($request,
        [

            'email'=>'required|unique:td_user,email',
            'password'=>'required|min:3|max:20',
            'passwordagain'=>'required|same:password'
        ],
        
        [

            'email.required'=>'Bạn chưa nhập email',
            'email.email'=>'Bạn chưa nhập đúng định dạng email',
            'email.unique'=>'Email bạn nhập đã tồn tại',
            'password.required'=>'Bạn chưa nhập mật khẩu',
            'password.min'=>'Mật khẩu phải có ít nhất 3 ký tự',
            'password.max'=>'Mật khẩu không quá 20 ký tự',
            'passwordagain.same'=>'Mật khẩu nhập lại chưa khớp với mật khẩu trên'

        ]);

        $users=new MCustomer;
        $users->email=$request->email;
        $users->password=bcrypt($request->password);
        $users->save();

        return back()->with('thongbao','Bạn đã thêm thành công');

    }
    public function geteditcustomer()
    {
    	return view('fontend.FormLogin.information');
   	}

      public function editcustomer(Request $request, $id)
    {

        $users=MCustomer::find($id);

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

	public function indexloginform()
	{
		return view('fontend.FormLogin.formlogin');
	}
    // public function index(Request $request)
    // {
    //    $arr=['email'=>$request->email, 'password'=>$request->password];
    //    if($request->remember='Remember Me'){
    //       $remember=true;
    //   }else {
    //       $remember=false;
    //   }
    //   if(Auth::attempt($arr,$remember)){
    //       return redirect('trangchu');
    //   }
    //   else
    //   {         
    //        return back()->withInput()->with('thongbao', 'Login false');
    //   }
    // }


    //  public function __construct()
    // {
    //     $this->middleware('guest:customer')->except('logout');
    // }
	public function index(Request $request)
	{
        // Attempt to log the user in
		if(Auth::guard('customer')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember))
		{
			return redirect('trangchu');
		}

        // if unsuccessful
		return back()->withInput()->with('thongbao', 'Login false');
	}

	public function getLogoutCustomer()
	{
		Auth::guard('customer')->logout();
		return redirect('trangchu');
	}

}
