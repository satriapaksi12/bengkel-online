<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('kecamatan')->insert([
            'id' => '2',
            'name' => 'Banjarsari',
            'kota_id' => '1'
        ]); 
        DB::table('kecamatan')->insert([
            'id' => '3',
            'name' => 'Laweyan',
            'kota_id' => '1'
        ]); 
        DB::table('kecamatan')->insert([
            'id' => '4',
            'name' => 'Pasar Kliwon',
            'kota_id' => '1'
        ]); 
        DB::table('kecamatan')->insert([
            'id' => '5',
            'name' => 'Serengan',
            'kota_id' => '1'
        ]); 
        DB::table('kecamatan')->insert([
            'id' => '6',
            'name' => 'Baki',
            'kota_id' => '2'
        ]);
        DB::table('kecamatan')->insert([
            'id' => '7',
            'name' => 'Bendosari',
            'kota_id' => '2'
        ]);
        DB::table('kecamatan')->insert([
            'id' => '8',
            'name' => 'Bulu',
            'kota_id' => '2'
        ]);
        DB::table('kecamatan')->insert([
            'id' => '9',
            'name' => 'Gatak',
            'kota_id' => '2'
        ]);
        DB::table('kecamatan')->insert([
            'id' => '10',
            'name' => 'Grogol',
            'kota_id' => '2'
        ]);
        DB::table('kecamatan')->insert([
            'id' => '11',
            'name' => 'Kartasura',
            'kota_id' => '2'
        ]);
        DB::table('kecamatan')->insert([
            'id' => '12',
            'name' => 'Mojolaban',
            'kota_id' => '2'
        ]);
        DB::table('kecamatan')->insert([
            'id' => '13',
            'name' => 'Nguter',
            'kota_id' => '2'
        ]);
        DB::table('kecamatan')->insert([
            'id' => '14',
            'name' => 'Polokarto',
            'kota_id' => '2'
        ]);
        DB::table('kecamatan')->insert([
            'id' => '15',
            'name' => 'Sukoharjo',
            'kota_id' => '2'
        ]);
        DB::table('kecamatan')->insert([
            'id' => '16',
            'name' => 'Tawangsari',
            'kota_id' => '2'
        ]);
        DB::table('kecamatan')->insert([
            'id' => '17',
            'name' => 'Weru',
            'kota_id' => '2'
        ]);
    }
}
