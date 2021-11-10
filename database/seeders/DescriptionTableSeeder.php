<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DescriptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s', strtotime('now'));
        for ($i = 0; $i < 5; $i++) {
            DB::table('descriptions')->insert([
                'product_id' => 1,
                'body' => uniqid(),
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }
    }
}
