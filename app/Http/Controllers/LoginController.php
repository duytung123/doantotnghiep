<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\User;
use App\Statistic;
use App\Product;
use Mail;

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
        $arr = ['email' => $request->email, 'password' => $request->password];
        if ($request->remember = 'Remember Me')
        {
            $remember = true;
        }
        else
        {
            $remember = false;
        }
        if (Auth::attempt($arr, $remember))
        {
            return redirect('admin/home');
        }
        else
        {
            return back()->withInput()
                ->with('thongbao', 'ban dang nhap that bai');
        }

    }

    public function filter(Request $request)
    {
        $data = $request->all();
        $fromday = $data['fromday'];
        $today = $data['today'];
        $list = Statistic::whereBetween('order_date', [$fromday, $today])->get();
        foreach ($list as $value)
        {
            $chartdata[] = array(
                'order_date' => $value->order_date,
                'order' => $value->total_order,
                'sales' => $value->sales,
                'quantity' => $value->quantity,
                'profit' => $value->profit

            );
        }
        echo $data = json_encode($chartdata);

    }
    public function dayorder(Request $request)
    {
        $data = $request->all();
        $now = Carbon::now('Asia/Ho_Chi_Minh')->todateString();
        $onemonth = Carbon::now('Asia/Ho_Chi_Minh')->startOfMonth()
            ->todateString();
        $list = Statistic::whereBetween('order_date', [$onemonth, $now])->get();
        foreach ($list as $value)
        {
            $chartdata[] = array(
                'order_date' => $value->order_date,
                'order' => $value->total_order,
                'sales' => $value->sales,
                'quantity' => $value->quantity,
                'profit' => $value->profit

            );
        }
        echo $data = json_encode($chartdata);

    }

}

