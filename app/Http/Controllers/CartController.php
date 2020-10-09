<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use Carbon\Carbon;
use DB;
use Mail;
use App\Product;
use App\Transaction;
use App\Order;
class CartController extends Controller
{
	public function getaddcart($id)
	{
		$product = Product::find($id);
		Cart::add(['id' => $id, 'name' => $product->prod_name, 'qty' => 1, 'price' => $product->prod_price,'options' =>['img'=>$product->prod_img]]);
		return redirect('cart/show');

	}
	public function getshowcart()
	{
		$data['subtotal']= str_replace(',', '', Cart::total());
		$data['itemdd']=Cart::content();
		return view('fontend.Phone.Cartphone',$data);
	}

	public function getupdatecart(Request $request)
	{
		Cart::update($request->rowId,$request->qty);
	}

	public function getdeletecart($id)
	{
		if($id=='all')
		{
			Cart::destroy();
		}
		else
		{
			Cart::remove($id);
		}
		return back();
	}

	public function postcomplete(Request $request)
	{
		$total=str_replace(',', '', Cart::total());
		$arr = [
			'user_name' => $request->email,
			'tr_totalprice' =>intval($total),
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

		$data['info']=$request->all();
		$email=$request->email;
		$data['subtotal']=Cart::total();
		$data['cart'] = Cart::content();
		Mail::send('fontend.Complete.Email',$data,function($message) use($email)
		{
			$message->from('tichuot455@gmail.com', 'Khách hàng');

			$message->to($email, $email);

			$message->cc('tungnguyen1399@gmail.com','Nguyễn Duy Tùng');

			$message->subject('xác nhận đặt đơn hàng thành công');
		});
		Cart::destroy();
		return redirect('complete');
		
	}
	public function getcomple()
	{
		return view('Fontend.Complete.Complete');

	}

	public function Saveinfotransaction(Request $request)
	{

		return view('Fontend.Complete.Complete');
	}



}
