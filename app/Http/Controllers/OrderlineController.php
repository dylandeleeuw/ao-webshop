<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Orderline;
use App\Product;

class OrderlineController extends Controller
{

	public function index(Request $request){


		$order_id = $request->input('id');

		$items = Orderline::all()->where('order_id', '=', $order_id);
		$i = 0;
		$totalCartPrice = 0;

		foreach ($items as $item) {
				$products[] = product::Find($item->product_id);
				$products[$i]->totalPrice = $products[$i]->price * $item->quantity;
				$products[$i]->quantity = $item->quantity;
				$totalCartPrice = $totalCartPrice + $products[$i]->totalPrice;
				$i++;
		}

		return view('orderline', compact('products', 'totalCartPrice'));
	}



    public static function createOrderline(Request $request, $order_id, $items){

    	foreach ($items as $item) {
    		$orderline = new Orderline;

	    	$orderline->order_id = $order_id;
	    	$orderline->product_id = $item->id;
	    	$orderline->quantity = $item->quantity;

	    	$orderline->save();

	    	ShoppingCartController::emptyCart($request);
	    }
    }
}
