<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\AdminsTableSeeder;
use Database\Seeders\CarsTableSeeder;
use Database\Seeders\MarqueTableSeeder;
use Database\Seeders\ModelsTableSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AdminsTableSeeder::class,
            CarsTableSeeder::class,
            MarqueTableSeeder::class,
            ModelsTableSeeder::class
        ]);
    }
}
