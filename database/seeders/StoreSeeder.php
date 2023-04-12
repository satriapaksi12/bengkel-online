<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kota')->insert([
            'name' => 'Surakarta',
        ]);
        DB::table('kecamatan')->insert([
            'name' => 'Jebres',
            'kota_id' => 1,
        ]);
        DB::table('stores')->insert([
            'store_name' => 'Bengkel Nathan Abadi',
            'open' => Carbon::now()->toDateTimeString(),
            'close' => Carbon::now()->toDateTimeString(),
            'address' => 'Solo',
            'phone_store' => '928389123',
            'status_activation' => 1,
            'id_mitra' => 2,
            'id_kecamatan' => 1,
            'store_image' => '2dawdw',
            'lat' => '-7.564549075372528',
            'long' => '110.84062825432814',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('stores')->insert([
            'store_name' => 'Bengkel Makmur Sentosa',
            'open' => Carbon::now()->toDateTimeString(),
            'close' => Carbon::now()->toDateTimeString(),
            'address' => 'Solo',
            'phone_store' => '928389103',
            'status_activation' => 1,
            'id_mitra' => 3,
            'id_kecamatan' => 1,
            'store_image' => '3dawdw',
            'lat' => '-7.561835732657607',
            'long' => '110.84882803103476',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('stores')->insert([
            'store_name' => 'Bengkel Motor CB Bapak Minggu',
            'open' => Carbon::now()->toDateTimeString(),
            'close' => Carbon::now()->toDateTimeString(),
            'address' => 'Solo',
            'phone_store' => '928389103',
            'status_activation' => 1,
            'id_mitra' => 5,
            'id_kecamatan' => 1,
            'store_image' => '3dawdw',
            'lat' => '-7.568935368631211',
            'long' => '110.85218329741204',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('stores')->insert([
            'store_name' => 'Bengkel Motor Ncing Pasroom',
            'open' => Carbon::now()->toDateTimeString(),
            'close' => Carbon::now()->toDateTimeString(),
            'address' => 'Solo',
            'phone_store' => '928389103',
            'status_activation' => 1,
            'id_mitra' => 7,
            'id_kecamatan' => 1,
            'store_image' => '3dawdw',
            'lat' => '-7.565149165062955',
            'long' => '110.86647410687202',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('stores')->insert([
            'store_name' => 'Bengkel River Side (Pinggir Kali)',
            'open' => Carbon::now()->toDateTimeString(),
            'close' => Carbon::now()->toDateTimeString(),
            'address' => 'Solo',
            'phone_store' => '928389103',
            'status_activation' => 1,
            'id_mitra' => 6,
            'id_kecamatan' => 1,
            'store_image' => '3dawdw',
            'lat' => '-7.554811383797767',
            'long' => '110.84209819171498',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('stores')->insert([
            'store_name' => 'Bengkel Pak Bero',
            'open' => Carbon::now()->toDateTimeString(),
            'close' => Carbon::now()->toDateTimeString(),
            'address' => 'Solo',
            'phone_store' => '928389103',
            'status_activation' => 1,
            'id_mitra' => 6,
            'id_kecamatan' => 1,
            'store_image' => '3dawdw',
            'lat' => '-7.562851901788904',
            'long' => '110.85132499065892',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('stores')->insert([
            'store_name' => 'Bengkel Purwoloyo',
            'open' => Carbon::now()->toDateTimeString(),
            'close' => Carbon::now()->toDateTimeString(),
            'address' => 'Solo',
            'phone_store' => '928389103',
            'status_activation' => 1,
            'id_mitra' => 3,
            'id_kecamatan' => 1,
            'store_image' => '3dawdw',
            'lat' => '-7.5660000002422025',
            'long' => '110.85085292196567',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('stores')->insert([
            'store_name' => 'Bengkel Vespa Buyung',
            'open' => Carbon::now()->toDateTimeString(),
            'close' => Carbon::now()->toDateTimeString(),
            'address' => 'Solo',
            'phone_store' => '928389103',
            'status_activation' => 1,
            'id_mitra' => 2,
            'id_kecamatan' => 1,
            'store_image' => '3dawdw',
            'lat' => '-7.5612778438635715',
            'long' => '110.84917922351124',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('stores')->insert([
            'store_name' => 'Bengkel Mertua',
            'open' => Carbon::now()->toDateTimeString(),
            'close' => Carbon::now()->toDateTimeString(),
            'address' => 'Solo',
            'phone_store' => '928389103',
            'status_activation' => 1,
            'id_mitra' => 5,
            'id_kecamatan' => 1,
            'store_image' => '3dawdw',
            'lat' => '-7.564443104694164',
            'long' => '110.84062224071869',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('stores')->insert([
            'store_name' => 'Solusi Motor 45',
            'open' => Carbon::now()->toDateTimeString(),
            'close' => Carbon::now()->toDateTimeString(),
            'address' => 'Solo',
            'phone_store' => '928389103',
            'status_activation' => 1,
            'id_mitra' => 3,
            'id_kecamatan' => 1,
            'store_image' => '3dawdw',
            'lat' => '-7.566576638302655',
            'long' => '110.85621644418637',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('stores')->insert([
            'store_name' => 'Bengkel Sebelas Maret',
            'open' => Carbon::now()->toDateTimeString(),
            'close' => Carbon::now()->toDateTimeString(),
            'address' => 'Solo',
            'phone_store' => '928389103',
            'status_activation' => 1,
            'id_mitra' => 7,
            'id_kecamatan' => 1,
            'store_image' => '3dawdw',
            'lat' => '-7.557863136921388',
            'long' => '110.85658100439962',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);
    }
}
