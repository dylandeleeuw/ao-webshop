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
        DB::table('products')->insert([
            'name' => 'kast',
            'description' => 'lorem',
            'price' => 60,
        ]);
        DB::table('products')->insert([
            'name' => 'bank',
            'description' => 'lorem',
            'price' => 1200,
        ]);
        DB::table('products')->insert([
            'name' => 'bed',
            'description' => 'lorem',
            'price' => 699.99,
        ]);
        DB::table('products')->insert([
            'name' => 'tafel',
            'description' => 'lorem',
            'price' => 369.99,
        ]);
        DB::table('products')->insert([
            'name' => 'stoel',
            'description' => 'lorem',
            'price' => 40,
        ]);
        DB::table('products')->insert([
            'name' => 'broek',
            'description' => 'lorem',
            'price' => 25,
        ]);
        DB::table('products')->insert([
            'name' => 'schoenen',
            'description' => 'lorem',
            'price' => 120,
        ]);
        DB::table('products')->insert([
            'name' => 'jas',
            'description' => 'lorem',
            'price' => 230,
        ]);
        DB::table('products')->insert([
            'name' => 'shirt',
            'description' => 'lorem',
            'price' => 20,
        ]);
        DB::table('products')->insert([
            'name' => 'pet',
            'description' => 'lorem',
            'price' => 30,
        ]);
        DB::table('products')->insert([
            'name' => 'voetbal',
            'description' => 'lorem',
            'price' => 10,
        ]);
        DB::table('products')->insert([
            'name' => 'tennis racket',
            'description' => 'lorem',
            'price' => 95,
        ]);
        DB::table('products')->insert([
            'name' => 'basketbal',
            'description' => 'lorem',
            'price' => 15,
        ]);
        DB::table('products')->insert([
            'name' => 'hockystick',
            'description' => 'lorem',
            'price' => 45,
        ]);
        DB::table('products')->insert([
            'name' => 'tennisbal',
            'description' => 'lorem',
            'price' => 5,
        ]);
        DB::table('products')->insert([
            'name' => 'hamer',
            'description' => 'lorem',
            'price' => 15,
        ]);
        DB::table('products')->insert([
            'name' => 'schroevendraaier',
            'description' => 'lorem',
            'price' => 10,
        ]);
        DB::table('products')->insert([
            'name' => 'boor',
            'description' => 'lorem',
            'price' => 140,
        ]);
        DB::table('products')->insert([
            'name' => 'zaag',
            'description' => 'lorem',
            'price' => 49,
        ]);
        DB::table('products')->insert([
            'name' => 'schuurmashine',
            'description' => 'lorem',
            'price' => 140,
        ]);
    }
}