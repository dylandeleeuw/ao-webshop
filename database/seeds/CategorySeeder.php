<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Electronica',
        ]);
        DB::table('categories')->insert([
            'name' => 'Meubels',
        ]);
        DB::table('categories')->insert([
            'name' => 'Kleding',
        ]);
        DB::table('categories')->insert([
            'name' => 'Sport',
        ]);
        DB::table('categories')->insert([
            'name' => 'Gereedschap',
        ]);
    }
}