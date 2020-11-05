<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Cart;
use App\Transaction;
use App\Order;
use DB;

class OrderController extends Controller
{
    public function getorder()
    {

    	$data['order']= Transaction::all();
    	return view('backend.Order.Order',$data);

    }
    public function getvieworder(Request $request,$id)
    {
    	if($request->ajax())
    	{

    		$orders = Order::with('product1')->where('or_transaction_id',$id)->get();

    		$html= view('backend.Components.chitietdonhang',compact('orders'))->render();

    		return response()->json($html);

    	}
    }
    public function delete($id)
    {
      Transaction::destroy($id);
      return back();

    }
    public function active($id)
    {
       $transaction = Transaction::find($id);
       // dd($transaction);
      $orders =Order::where('or_transaction_id',$id)->get();
      if($orders){
        foreach ($orders as $item) {
            $product =Product::find($item->or_product_id);
            $product->prod_number=$product->prod_number - $item->or_qty;
            $product->save();
        }
      }
      $transaction->tr_status=Transaction::STATUS_PRIVATE;
      $transaction->save();
      return back();
    }
  
}
