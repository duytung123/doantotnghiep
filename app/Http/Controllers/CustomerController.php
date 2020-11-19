<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\MCustomer;

class CustomerController extends Controller
{
    public function postaddcustomer(Request $request)
    {
        $this->validate($request, [

        'email' => 'required|unique:td_customer,email', 'password' => 'required|min:3|max:20', 'passwordagain' => 'required|same:password'],

        [

        'email.required' => 'Bạn chưa nhập email', 'email.email' => 'Bạn chưa nhập đúng định dạng email', 'email.unique' => 'Email bạn nhập đã tồn tại', 'password.required' => 'Bạn chưa nhập mật khẩu', 'password.min' => 'Mật khẩu phải có ít nhất 3 ký tự', 'password.max' => 'Mật khẩu không quá 20 ký tự', 'passwordagain.same' => 'Mật khẩu nhập lại chưa khớp với mật khẩu trên'

        ]);

        $users = new MCustomer;
        $users->email = $request->email;
        $users->name = $request->name;
        $users->password = bcrypt($request->password);
        $users->save();
        return back()
            ->with('thongbao', 'Bạn đã thêm thành công');

    }
   
    public function editcustomer(Request $request, $id)
    {

        $Customer = new MCustomer;
        $arr['name'] = $request->name;
        $arr['email'] = $request->email;
        $arr['phone'] = $request->phone;
        $arr['gender'] = $request->gender;
        $arr['code_tax'] = $request->code;
        $arr['address'] = $request->address;
        $Customer::where('id', $id)->update($arr);
        return back()->with('thongbao', 'Cập nhật thông tin thành công');

    }

    public function indexloginform()
    {
        return view('fontend.FormLogin.LOGIN');
    }
   
    public function index(Request $request)
    {
        // Attempt to log the user in
        if (Auth::guard('customer')->attempt(['email' => $request->email, 'password' => $request
            ->password], $request->remember))
        {
            return back();
        }

        // if unsuccessful
        return back()
            ->withInput()
            ->with('thongbao', 'Login false');
    }

    public function getLogoutCustomer()
    {
        Auth::guard('customer')
            ->logout();
        return redirect('trangchu');
    }
    public function geteditpassword($id)
    {
        $data['password']=MCustomer::find($id);
        return view('fontend.FormLogin.Changepassword',$data);
    }
    public function posteditpassword(Request $request,$id)
    {
        $Customer=MCustomer::find($id);
        if($request)
        {
             $this->validate($request,
        [
            'password_old'=>'required:6',
            'password'=>'required|min:6|max:20',
            'password_again'=>'required|same:password'
        ],
        
        [
            'password_old'=>'yêu cầu bạn nhập mật khẩu cũ',
            'password.required'=>'Bạn chưa nhập mật khẩu',
            'password.min'=>'Mật khẩu phải có ít nhất 6 ký tự',
            'password.max'=>'Mật khẩu không quá 20 ký tự',
            'password_again.same'=>'Mật khẩu nhập lại chưa khớp với mật khẩu trên'

        ]);

         $Customer->password=bcrypt($request->password);

        }
  
        $Customer->save();
        return $this->getLogoutCustomer()->with('thongbao','Đổi mật khẩu thành công thành công');
    }

}
