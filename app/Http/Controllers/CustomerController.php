<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\MCustomer;
use Mail;
use Carbon\Carbon;
use Illuminate\Support\Str;

class CustomerController extends Controller
{
    public function postaddcustomer(Request $request)
    {
        $this->validate($request, [

        'email' => 'required', 'password' => 'required|min:6|max:20', 'passwordagain' => 'required|same:password'],

        [

        'email.required' => 'Bạn chưa nhập email', 'email.email' => 'Bạn chưa nhập đúng định dạng email', 'password.required' => 'Bạn chưa nhập mật khẩu', 'password.min' => 'Mật khẩu phải có ít nhất 3 ký tự', 'password.max' => 'Mật khẩu không quá 20 ký tự', 'passwordagain.same' => 'Mật khẩu nhập lại chưa khớp với mật khẩu trên'

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
        $arr['phone'] = $request->phone;
        $arr['gender'] = $request->gender;
        $arr['code_tax'] = $request->code;
        $arr['address'] = $request->address;
        $Customer::where('id', $id)->update($arr);
        return back()->with('thongbao', 'Cập nhật thông tin thành công');
    }

    public function indexloginform()
    {
        return view('fontend.FormLogin.Login');
    }

    public function index(Request $request)
    {
        // Attempt to log the user in
        if (Auth::guard('customer')->attempt(['email' => $request->email, 'password' => $request
            ->password], $request->remember))
        {
            return redirect('cart/show');
        }

        // if unsuccessful
        return back()
            ->withInput()
            ->with('thongbao', 'Đăng nhập thất bại');
    }

    public function getLogoutCustomer()
    {
        Auth::guard('customer')
            ->logout();
        return redirect('trangchu');
    }
    public function geteditpassword($id)
    {
        $data['password'] = MCustomer::find($id);
        return view('fontend.FormLogin.Changepassword', $data);
    }
    public function posteditpassword(Request $request, $id)
    {
        $Customer = MCustomer::find($id);
        if ($request)
        {
            $this->validate($request, ['password_old' => 'required:6', 'password' => 'required|min:6|max:20', 'password_again' => 'required|same:password'],

            ['password_old' => 'yêu cầu bạn nhập mật khẩu cũ', 'password.required' => 'Bạn chưa nhập mật khẩu', 'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự', 'password.max' => 'Mật khẩu không quá 20 ký tự', 'password_again.same' => 'Mật khẩu nhập lại chưa khớp với mật khẩu trên'

            ]);

            $Customer->password = bcrypt($request->password);

        }
        $Customer->save();
        return $this->getLogoutCustomer()
            ->with('thongbao', 'Đổi mật khẩu thành công thành công');
    }

    public function forgetpass(Request $request)
    {
        return view('fontend.FormLogin.ForgetPassWord');
    }

    public function recovery(Request $request)
    {
        $data = $request->all();
        $now = Carbon::now()->format('Y-m-d');
        $title_mail = "Lấy lại mật khẩu" . '-' . $now;
        $customer = MCustomer::where('email', '=', $data['email'])->get();
        foreach ($customer as $key)
        {
            $customer_id = $key->id;
        }
        if ($customer)
        {
            $count_customer = $customer->count();
            if ($count_customer == 0)
            {
                return back()->with('thongbao','Không tồn tại Email');
            }
            else
            {
                $random = Str::random(8);
                $customer = MCustomer::find($customer_id);
                $customer->recover_token = $random;
                $customer->save();
                $to_email = $data['email'];
                $url = url('loginform/updaterecovery?email=' . $to_email . '&token=' . $random);
                $data = array(
                    "name" => $title_mail,
                    "body" => $url,
                    "email" => $data['email']
                );
                Mail::send('fontend.FormLogin.ForgetPassWordNotyfi', ['data' => $data], function ($message) use ($title_mail, $data)
                {
                    $message->from($data['email']);
                    $message->to($data['email'])->subject($title_mail);
                });
                return redirect('/loginform')->with('thongbao', 'Bạn vui lòng kiểm tra Email');
            }

        }
    }
    public function updaterecovery(Request $request)
    {
        return view('fontend.FormLogin.UpdateRecovery');
    }
    public function updatepassword(Request $request)
    {
        $data = $request->all();
        $random = Str::random(8);
        $customer = MCustomer::where('email', '=', $data['email'])->get();
        foreach ($customer as $key)
        {
            $customer_id = $key->id;
        }
        if ($customer)
        {
            $customer = MCustomer::find($customer_id);
            $customer->recover_token = $random;
            $customer->password = bcrypt($data['password']);
            $customer->save();
            return redirect('/loginform')
                ->with('thongbao', 'Mời bạn đăng nhập lại');
        }
        return false;
    }

}

