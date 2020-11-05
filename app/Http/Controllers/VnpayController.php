<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Cart;
use Carbon\Carbon;
use DB;
use App\Product;
use App\Transaction;
use App\Order;
// use App\Http\Requests\ADDrequest;
class VnpayController extends Controller
{

    // Ngân hàng: NCB
    // Số thẻ: 9704198526191432198
    // Tên chủ thẻ:NGUYEN VAN A
    // Ngày phát hành: 07/15
    // Mật khẩu OTP:123456
	public function index($id)
	 {
		$itemdd=Cart::content();
		return view('fontend.VNPAY.index',compact('itemdd'));
	}
	public function getview()
	{
		return view('fontend.VNPAY.return');
	}
	public function create(Request $request)
	{

		session(['cost_id' => $request->id]);
        session(['url_prev' => url()->previous()]);
        $vnp_TmnCode = "EFVOTUU1"; //Mã website tại VNPAY 
        $vnp_HashSecret = "WOTZLCXVIEEHKKKXKWCOBXXFBXPJMNBT"; //Chuỗi bí mật
        $vnp_Url = "http://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = "http://localhost/thegioiso/public/trangchu";
        $vnp_TxnRef = date("YmdHis"); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = "Thanh toán hóa đơn phí dich vụ";
        $vnp_OrderType = 'billpayment';
        $vnp_Amount =str_replace(',', '',Cart::subtotal()) * 100;
        $vnp_Locale = 'vn';
        $vnp_IpAddr = request()->ip();

        $inputData = array(
            "vnp_Version" => "2.0.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
        );
     
        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . $key . "=" . $value;
            } else {
                $hashdata .= $key . "=" . $value;
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }
                $arr = [
            'user_name' => $request->name,
            'tr_totalprice' =>str_replace(',', '',Cart::subtotal()),
            'tr_phone' =>$request->phone,
            'tr_note' =>$request->note,
            'tr_address' =>$request->add,
            'created_at' =>Carbon::now(),
            'updated_at' =>Carbon::now()
        ];
        $transactionId = DB::table('td_transaction')->insertGetId($arr);
        if($transactionId)
        {
            $cart= Cart::content();
            foreach($cart as $product)
            {
                Order::insert([
                    'or_transaction_id' =>$transactionId,
                    'or_product_id' =>$product->id,
                    'or_qty' => $product->qty,
                    'or_price'=>$product->price,
                    'created_at' =>Carbon::now(),
                    'updated_at' =>Carbon::now()
                ]);
            }
        }
        Cart::destroy();

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
           // $vnpSecureHash = md5($vnp_HashSecret . $hashdata);
            $vnpSecureHash = hash('sha256', $vnp_HashSecret . $hashdata);
            $vnp_Url .= 'vnp_SecureHashType=SHA256&vnp_SecureHash=' . $vnpSecureHash;
        }
        return redirect($vnp_Url);

	}

    public function return(Request $request)
    {
    	$url = session('url_prev','/');
    	if($request->vnp_ResponseCode == "00") 
    	{
    		$this->apSer->thanhtoanonline(session('cost_id'));
    		return redirect('trangchu');
    	}
    	session()->forget('url_prev');
    	return redirect($url)->with('errors' ,'Lỗi trong quá trình thanh toán phí dịch vụ');
    }
}
