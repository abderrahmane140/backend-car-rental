<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MarqueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('marque')->insert([
            [ 'id' => 7, 'nom_marque' => 'kia', 'image_path' => 'marque/6LAsuMlysfURY7qaTpNGoveJyRgf17qQFU9TkXES.png', 'created_at' => Carbon::parse('2024-10-25 09:15:32'), 'updated_at' => Carbon::parse('2024-10-25 09:15:32') ],
            [ 'id' => 8, 'nom_marque' => 'mercedes', 'image_path' => 'marque/xa2Jzd7K7OH8I9skjsIm4nH26RnpOpsrjLOYX0N0.jpg', 'created_at' => Carbon::parse('2024-10-25 09:21:02'), 'updated_at' => Carbon::parse('2024-10-25 09:21:02') ],
            [ 'id' => 9, 'nom_marque' => 'bmw', 'image_path' => 'marque/JcQceWFsCxu7LqfATq2J13FV7rBSjQtto4BqMmFf.png', 'created_at' => Carbon::parse('2024-10-25 09:24:13'), 'updated_at' => Carbon::parse('2024-10-25 09:24:13') ],
            [ 'id' => 10, 'nom_marque' => 'audi', 'image_path' => 'marque/Fqlpu9uXBLJrlAhQ0UQ92ukUAZGwKNKzJjhAvEtV.png', 'created_at' => Carbon::parse('2024-10-25 09:27:53'), 'updated_at' => Carbon::parse('2024-10-25 09:27:53') ],
            [ 'id' => 11, 'nom_marque' => 'toyota', 'image_path' => 'marque/gPYKk10YqziRGGmlbBV6kDbtqmLKlkpuQBumnYnO.png', 'created_at' => Carbon::parse('2024-10-25 09:28:07'), 'updated_at' => Carbon::parse('2024-10-25 09:28:07') ],
            [ 'id' => 12, 'nom_marque' => 'Renault', 'image_path' => 'marque/XTvClPz5lQVXi7OHHNbbsyMSIfLYeYzy553Crwxi.png', 'created_at' => Carbon::parse('2024-10-25 09:28:29'), 'updated_at' => Carbon::parse('2024-10-25 09:28:29') ],
        ]);
    }
}
