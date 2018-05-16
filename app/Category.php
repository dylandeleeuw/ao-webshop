<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
	public static function getProductsByCategory($id){

		$products = DB::table('products')
            	->join('products_categories', 'products.id', '=', 'products_categories.product_id')
                ->join('categories', 'categories.id', '=', 'products_categories.category_id')
                ->where('categories.id', '=', $id)
                ->select('products.*', 'categories.name as category_name')
                ->get();

        return $products;
	}
}