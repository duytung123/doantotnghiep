<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function gethome()
    {
    	return view('index');
    }
    public function getLogout()
    {
    	Auth::logout();
    	return redirect('login');
    }

    public function getLogin(Request $request)
    {
    	return view('backend.Admin.login');
    }
    public function postLogin(Request $request)
    {
    	 $arr=['email'=>$request->email, 'password'=>$request->password];
       if($request->remember='Remember Me'){
          $remember=true;
      }else {
          $remember=false;
      }
      if(Auth::attempt($arr,$remember)){
          return redirect('admin/home');
      }
      else
      {         
           return back()->withInput()->with('thongbao', 'ban dang nhap that bai');
      }

    }
}
