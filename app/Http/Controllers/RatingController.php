<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Product;
use App\Rating;
use App\Category;
use DB;
use Carbon\Carbon;

class RatingController extends Controller
{
	public function rating(Request $request)
	{
		
		if($request->ajax())
		{
			$id = $request->id;
			Rating::insert(
			[
				'r_product_id' => $id,
				'r_content' =>$request->r_content,
				'r_number' =>$request->number,
				'r_name' => $request->r_name,
				'r_email' =>$request->r_email,
				'r_phone' =>$request->r_phone,
				'created_at' =>Carbon::now(),
				'updated_at' =>Carbon::now()
  
			]);
				
			$product =Product::find($id);
			$product->prod_total_number +=$request->number;
			$product->prod_rating_number += 1;
			$product ->save();
			return response()->json(['code' => '1']);

		}
	}
}
