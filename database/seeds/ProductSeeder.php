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
    }
}