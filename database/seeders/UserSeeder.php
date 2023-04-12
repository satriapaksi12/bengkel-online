<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'SuperAdmin',
            'email' => 'super@test.test',
            'nik' => rand(1, 9999999999999999),
            'npwp' => rand(1, 999999999999999),
            'ktp' => Str::random(10),
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('rahasia21'),
            'created_at' => Carbon::now(),
        ]);

        DB::table('users')->insert([
            'name' => 'Mitra',
            'email' => 'mitra@test.test',
            'nik' => rand(1, 9999999999999999),
            'npwp' => rand(1, 999999999999999),
            'ktp' => Str::random(10),
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('rahasia21'),
            'created_at' => Carbon::now(),
        ]);

        DB::table('users')->insert([
            'name' => 'Mitra2',
            'email' => 'mitra2@test.test',
            'nik' => rand(1, 9999999999999999),
            'npwp' => rand(1, 999999999999999),
            'ktp' => Str::random(10),
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('rahasia21'),
            'created_at' => Carbon::now(),
        ]);

        DB::table('users')->insert([
            'name' => 'employee',
            'email' => 'employee@test.test',
            'nik' => rand(1, 9999999999999999),
            'npwp' => rand(1, 999999999999999),
            'ktp' => Str::random(10),
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('rahasia21'),
            'created_at' => Carbon::now(),
        ]);

        DB::table('users')->insert([
            'name' => 'Muhammad Santoas',
            'email' => 'mitra3@test.test',
            'nik' => rand(1, 9999999999999999),
            'npwp' => rand(1, 999999999999999),
            'ktp' => Str::random(10),
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('rahasia21'),
            'created_at' => Carbon::now(),
        ]);

        DB::table('users')->insert([
            'name' => 'Sammuel Sitorus',
            'email' => 'mitra4@test.test',
            'nik' => rand(1, 9999999999999999),
            'npwp' => rand(1, 999999999999999),
            'ktp' => Str::random(10),
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('rahasia21'),
            'created_at' => Carbon::now(),
        ]);

        DB::table('users')->insert([
            'name' => 'Tutus Stompson',
            'email' => 'mitra5@test.test',
            'nik' => rand(1, 9999999999999999),
            'npwp' => rand(1, 999999999999999),
            'ktp' => Str::random(10),
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('rahasia21'),
            'created_at' => Carbon::now(),
        ]);

        DB::table('role_user')->insert([
            'role_id' => 1,
            'user_id' => 1,
            'user_type' => 'App\Models\User',
        ]);

        DB::table('role_user')->insert([
            'role_id' => 3,
            'user_id' => 2,
            'user_type' => 'App\Models\User',
        ]);
        // Mitra
        DB::table('role_user')->insert([
            'role_id' => 3,
            'user_id' => 3,
            'user_type' => 'App\Models\User',
        ]);

        DB::table('role_user')->insert([
            'role_id' => 3,
            'user_id' => 5,
            'user_type' => 'App\Models\User',
        ]);

        DB::table('role_user')->insert([
            'role_id' => 3,
            'user_id' => 6,
            'user_type' => 'App\Models\User',
        ]);

        DB::table('role_user')->insert([
            'role_id' => 3,
            'user_id' => 7,
            'user_type' => 'App\Models\User',
        ]);

        // Employee
        DB::table('role_user')->insert([
            'role_id' => 2,
            'user_id' => 4,
            'user_type' => 'App\Models\User',
        ]);
    }
}
