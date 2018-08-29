<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers;
use App\Order;

class OrderController extends Controller
{

	public function index(){

		if (Auth::user()) {
			$user_id = Auth::user()->id;
			$orders = Order::all()->where('user_id', '=', $user_id);

			return view('order', compact('orders'));
		} else {
			return redirect('/categories');
		}
	}

    public function createOrder(Request $request){

    	$user_id = Auth::user()->id;
    	$order = new Order;

    	$order->user_id = $user_id;
    	$order->status = 'order placed';

    	$order->save();

    	$order = Order::orderBy('created_at', 'desc')->where('user_id','=', $user_id)->first();
    	$items = ShoppingCartController::getAllItems($request);

    	OrderlineController::createOrderline($request, $order->id, $items);

    	return redirect('/order');
    }
}
