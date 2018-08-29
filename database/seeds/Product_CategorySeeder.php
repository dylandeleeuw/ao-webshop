<?php

use Illuminate\Database\Seeder;

class Product_CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   

        $x=1;
        for ($i=1;$i<=5;$i++) {
            for ($j=1;$j<=5;$j++) {
                
                DB::table('products_categories')->insert([
                    'product_id' => $x,
                    'category_id' => $i,
                ]);
                $x++;
            }  
        }  
    } 
}
