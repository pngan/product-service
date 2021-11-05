<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = ['beats', 'meats', 'greets'];

        array_map(function ($name){
            $now = date('Y-m-d H:i:s', strtotime('now'));
            DB::table('products')->insert([
                'name' => $name,
                'created_at' => $now,
                'updated_at' => $now
            ]);
         }, $products);
    }
}
