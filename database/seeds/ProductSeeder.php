<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'laptop',
            'description' => 'ipsum',
            'price' => 699.99,
        ]);
        DB::table('products')->insert([
            'name' => 'telefoon',
            'description' => 'lorem',
            'price' => 434.99,
        ]);
        DB::table('products')->insert([
            'name' => 'wasmashine',
            'description' => 'lorem',
            'price' => 750.00,
        ]);
        DB::table('products')->insert([
            'name' => 'magnetron',
            'description' => 'lorem',
            'price' => 249.99,
        ]);
        DB::table('products')->insert([
            'name' => 'televiesie',
            'description' => 'lorem',
            'price' => 699.99,
        ]);
    }
}