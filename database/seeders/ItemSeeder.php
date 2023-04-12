<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'id' => '1',
            'category_id' => '1',
            'user_id' => '3',
            'name' => 'Brake A',
            'slug' => 'brakes',
            'brand' => 'Brand A',
            'desc' => 'Description',
            'price' => 200000,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('items')->insert([
            'id' => '3',
            'category_id' => '6',
            'user_id' => '3',
            'name' => 'Oil A',
            'slug' => 'oil',
            'brand' => 'Brand Oil A',
            'desc' => 'Description',
            'price' => 50000,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('item_store')->insert([
            'item_id' => 1,
            'store_id' => 1,
            'price' => 200000
        ]);

        DB::table('item_store')->insert([
            'item_id' => 1,
            'store_id' => 2,
            'price' => 225000
        ]);
    }
}
