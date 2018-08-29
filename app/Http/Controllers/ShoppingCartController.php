<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\ShoppingCart;
use App\product;

class ShoppingCartController extends Controller
{

	public function index(Request $request){

		$shoppingcart = new ShoppingCart($request);
		$items = $shoppingcart->getAllItems();

		if (isset($items)) {
			$i = 0;
			$totalCartPrice = 0;

			foreach ($items as $item) {
				$products[] = product::Find($item->id);
				$products[$i]->totalPrice = $products[$i]->price * $item->quantity;
				$products[$i]->quantity = $item->quantity;
				$totalCartPrice = $totalCartPrice + $products[$i]->totalPrice;
				$i++;
			}

			return view('cart', compact('products', 'totalCartPrice'));
		}

		return view('cart');

	}

 	public function add(Request $request){

 		$id = $request->input('id');
 		$quantity = $request->input('quantity');

 		$shoppingcart = new ShoppingCart($request);
 		$shoppingcart->add($request, $id, $quantity);

		return redirect('/cart');
 	}   

 	//if the quantity is changed to a number below 1 it will be deleted
 	public function edit(Request $request){

 		$id = $request->input('id');
 		$quantity = $request->input('quantity');
 		$shoppingcart = new ShoppingCart($request);

 		if ($quantity < 1) {
	 		$shoppingcart->delete($request, $id);
	 	} else {
	 		$shoppingcart->edit($request, $id, $quantity);
	 	}

		return redirect('/cart');
 	}

 	public function delete(Request $request){

 		$id = $request->input('id');
 		$shoppingcart = new ShoppingCart($request);
	 	$shoppingcart->delete($request, $id);

		return redirect('/cart');
 	}

 	public static function getAllItems(Request $request){

 		$shoppingcart = new ShoppingCart($request);
 		$items = $shoppingcart->getAllItems();
 		
 		return $items;
 	}

 	public static function emptyCart(Request $request){

 		$shoppingcart = new ShoppingCart($request);
 		$shoppingcart->emptyCart();
 	}
}
