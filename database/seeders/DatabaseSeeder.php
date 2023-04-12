<?php

namespace Database\Seeders;
use bfinlay\SpreadsheetSeeder\SpreadsheetSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            LaratrustSeeder::class,
            UserSeeder::class,
            CategoriesSeeder::class,
            StoreSeeder::class,
            KotaSeeder::class,
            KecamatanSeeder::class,
            SpreadsheetSeeder::class
        ]);
    }
}
