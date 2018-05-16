<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class productController extends Controller
{
	public function index($id){

		$productInfo = Product::find($id);
		return view('product')->with(['productInfo'=>$productInfo]);
	}
}
