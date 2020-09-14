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

    		$orders = Order::where('or_transaction_id',$id)->get();

    		$html= view('backend.Components.chitietdonhang',compact('orders'))->render();

    		return response()->json($orders);

    	}
    }
  
}
