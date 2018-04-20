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
    public function index()
    {
    	$categories = Category::all();
        return view('categories', ['categories' => $categories]);
    }

    public function ProductsFromCategory($id)
    {
        $products = Category::getProductsByCategory($id);

        return view('products', ['products' => $products]);
    }
}
