<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class CategoryController extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    	$categories = Category::all();
        //$request->session()->put('name', 'test');

        //$data = $request->session()->all();
       // dd($data);

        return view('categories', ['categories' => $categories]);
    }

    public function ProductsFromCategory($id)
    {
        $products = Category::getProductsByCategory($id);

        return view('productlist', ['products' => $products]);
    }
}
