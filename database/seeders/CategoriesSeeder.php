<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Brakes',
            'slug' => 'brakes',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'icon_url' => 'img/sparepart/Brake.svg',
            'description' => 'Find good brakes'
        ]);

        DB::table('categories')->insert([
            'name' => 'Suspension',
            'slug' => 'suspension',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'icon_url' => 'img/sparepart/Shock Absorber2.svg',
            'description' => 'Dampen various vibrations generated from the road surface'
        ]);

        DB::table('categories')->insert([
            'name' => 'Drivetrain',
            'slug' => 'drivetrain',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'icon_url' => 'img/sparepart/Gearbox3.svg',
            'description' => 'Dampen various vibrations generated from the road surface'
        ]);

        DB::table('categories')->insert([
            'name' => 'Electronics',
            'slug' => 'electronics',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'icon_url' => 'img/sparepart/Input-Component4.svg',
            'description' => 'Help to keep your car running at its full potential'
        ]);

        DB::table('categories')->insert([
            'name' => 'Exhaust',
            'slug' => 'exhaust',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'icon_url' => 'img/sparepart/Exhaust-Pipe5.svg',
            'description' => 'Find all kinds of exhaust'
        ]);

        DB::table('categories')->insert([
            'name' => 'Oil',
            'slug' => 'oil',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'icon_url' => 'img/sparepart/Engine-Oil6.svg',
            'description' => 'Find perfect oil for your car'
        ]);

        DB::table('categories')->insert([
            'name' => 'Wheels',
            'slug' => 'wheels',
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'icon_url' => 'img/sparepart/Wheel7.svg',
            'description' => 'To help you choose, wheels and tyres'
        ]);

        DB::table('categories')->insert([
            'name' => 'Tools',
            'slug' => 'tools',
            'created_at' =>Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'icon_url' => 'img/sparepart/Toolbox8.svg',
            'description' => 'Tools for repairing and maintenance your car'
        ]);

    }
}
