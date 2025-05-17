<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ModelsTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('models')->insert([
            [ 'id' => 1, 'nom_model' => '7 Series', 'type_carburant' => 'diesel', 'gps' => 1, 'capacite_assises' => 8, 'marque_id' => 9, 'created_at' => Carbon::parse('2024-10-25 09:30:39'), 'updated_at' => Carbon::parse('2024-10-25 09:30:39') ],
            [ 'id' => 2, 'nom_model' => 'M340i', 'type_carburant' => 'diesel', 'gps' => 1, 'capacite_assises' => 6, 'marque_id' => 9, 'created_at' => Carbon::parse('2024-10-25 09:31:09'), 'updated_at' => Carbon::parse('2024-10-25 09:31:09') ],
            [ 'id' => 3, 'nom_model' => 'X1', 'type_carburant' => 'desiel', 'gps' => 1, 'capacite_assises' => 6, 'marque_id' => 9, 'created_at' => Carbon::parse('2024-10-25 09:31:30'), 'updated_at' => Carbon::parse('2024-10-25 09:31:30') ],
            [ 'id' => 4, 'nom_model' => '2 Series Gran', 'type_carburant' => 'desiel', 'gps' => 1, 'capacite_assises' => 7, 'marque_id' => 9, 'created_at' => Carbon::parse('2024-10-25 09:31:57'), 'updated_at' => Carbon::parse('2024-10-25 09:31:57') ],
            [ 'id' => 5, 'nom_model' => 'i7', 'type_carburant' => 'desiel', 'gps' => 0, 'capacite_assises' => 7, 'marque_id' => 9, 'created_at' => Carbon::parse('2024-10-25 09:32:25'), 'updated_at' => Carbon::parse('2024-10-25 09:32:25') ],
            [ 'id' => 6, 'nom_model' => 'A4', 'type_carburant' => 'desiel', 'gps' => 1, 'capacite_assises' => 5, 'marque_id' => 10, 'created_at' => Carbon::parse('2024-10-25 09:32:58'), 'updated_at' => Carbon::parse('2024-10-25 09:32:58') ],
            [ 'id' => 7, 'nom_model' => 'Q4', 'type_carburant' => 'desiel', 'gps' => 1, 'capacite_assises' => 7, 'marque_id' => 10, 'created_at' => Carbon::parse('2024-10-25 09:33:18'), 'updated_at' => Carbon::parse('2024-10-25 09:33:18') ],
            [ 'id' => 8, 'nom_model' => 'e-tron GT', 'type_carburant' => 'desiel', 'gps' => 1, 'capacite_assises' => 6, 'marque_id' => 10, 'created_at' => Carbon::parse('2024-10-25 09:33:46'), 'updated_at' => Carbon::parse('2024-10-25 09:33:46') ],
            [ 'id' => 9, 'nom_model' => 'S5 Sportback', 'type_carburant' => 'desiel', 'gps' => 1, 'capacite_assises' => 5, 'marque_id' => 10, 'created_at' => Carbon::parse('2024-10-25 09:34:09'), 'updated_at' => Carbon::parse('2024-10-25 09:34:09') ],
            [ 'id' => 10, 'nom_model' => 'Q5', 'type_carburant' => 'desiel', 'gps' => 1, 'capacite_assises' => 8, 'marque_id' => 11, 'created_at' => Carbon::parse('2024-10-25 09:34:38'), 'updated_at' => Carbon::parse('2024-10-25 09:34:38') ],
            [ 'id' => 11, 'nom_model' => 'Urban Cruiser Hyryder', 'type_carburant' => 'desiel', 'gps' => 1, 'capacite_assises' => 8, 'marque_id' => 11, 'created_at' => Carbon::parse('2024-10-25 09:35:10'), 'updated_at' => Carbon::parse('2024-10-25 09:35:10') ],
            [ 'id' => 12, 'nom_model' => 'Innova Crysta', 'type_carburant' => 'desiel', 'gps' => 1, 'capacite_assises' => 8, 'marque_id' => 11, 'created_at' => Carbon::parse('2024-10-25 09:38:06'), 'updated_at' => Carbon::parse('2024-10-25 09:38:06') ],
            [ 'id' => 13, 'nom_model' => 'Rumion', 'type_carburant' => 'desiel', 'gps' => 1, 'capacite_assises' => 5, 'marque_id' => 11, 'created_at' => Carbon::parse('2024-10-25 09:38:24'), 'updated_at' => Carbon::parse('2024-10-25 09:38:24') ],
            [ 'id' => 14, 'nom_model' => 'Glanza', 'type_carburant' => 'desiel', 'gps' => 0, 'capacite_assises' => 5, 'marque_id' => 11, 'created_at' => Carbon::parse('2024-10-25 09:39:21'), 'updated_at' => Carbon::parse('2024-10-25 09:39:21') ],
            [ 'id' => 15, 'nom_model' => 'Fortuner', 'type_carburant' => 'desiel', 'gps' => 0, 'capacite_assises' => 7, 'marque_id' => 11, 'created_at' => Carbon::parse('2024-10-25 09:39:43'), 'updated_at' => Carbon::parse('2024-10-25 09:39:43') ],
            [ 'id' => 16, 'nom_model' => 'Sonet', 'type_carburant' => 'desiel', 'gps' => 0, 'capacite_assises' => 7, 'marque_id' => 7, 'created_at' => Carbon::parse('2024-10-25 09:40:41'), 'updated_at' => Carbon::parse('2024-10-25 09:40:41') ],
            [ 'id' => 17, 'nom_model' => 'Carens', 'type_carburant' => 'desiel', 'gps' => 0, 'capacite_assises' => 8, 'marque_id' => 7, 'created_at' => Carbon::parse('2024-10-25 09:41:12'), 'updated_at' => Carbon::parse('2024-10-25 09:41:12') ],
            [ 'id' => 18, 'nom_model' => 'EV6', 'type_carburant' => 'desiel', 'gps' => 1, 'capacite_assises' => 5, 'marque_id' => 7, 'created_at' => Carbon::parse('2024-10-25 09:41:39'), 'updated_at' => Carbon::parse('2024-10-25 09:41:39') ],
            [ 'id' => 19, 'nom_model' => 'Seltos', 'type_carburant' => 'desiel', 'gps' => 1, 'capacite_assises' => 5, 'marque_id' => 7, 'created_at' => Carbon::parse('2024-10-25 09:42:00'), 'updated_at' => Carbon::parse('2024-10-25 09:42:00') ],
            [ 'id' => 20, 'nom_model' => 'Triber', 'type_carburant' => 'desiel', 'gps' => 1, 'capacite_assises' => 5, 'marque_id' => 12, 'created_at' => Carbon::parse('2024-10-25 09:42:27'), 'updated_at' => Carbon::parse('2024-10-25 09:42:27') ],
            [ 'id' => 21, 'nom_model' => 'Kwid', 'type_carburant' => 'desiel', 'gps' => 1, 'capacite_assises' => 8, 'marque_id' => 12, 'created_at' => Carbon::parse('2024-10-25 09:42:52'), 'updated_at' => Carbon::parse('2024-10-25 09:42:52') ],
            [ 'id' => 22, 'nom_model' => 'Kiger', 'type_carburant' => 'desiel', 'gps' => 0, 'capacite_assises' => 9, 'marque_id' => 12, 'created_at' => Carbon::parse('2024-10-25 09:43:12'), 'updated_at' => Carbon::parse('2024-10-25 09:43:12') ],
            [ 'id' => 23, 'nom_model' => 'Duster', 'type_carburant' => 'desiel', 'gps' => 0, 'capacite_assises' => 9, 'marque_id' => 12, 'created_at' => Carbon::parse('2024-10-25 09:43:33'), 'updated_at' => Carbon::parse('2024-10-25 09:43:33') ],
            [ 'id' => 24, 'nom_model' => 'A-Class', 'type_carburant' => 'desiel', 'gps' => 0, 'capacite_assises' => 5, 'marque_id' => 8, 'created_at' => Carbon::parse('2024-10-25 09:45:08'), 'updated_at' => Carbon::parse('2024-10-25 09:45:08') ],
            [ 'id' => 25, 'nom_model' => 'G-Class', 'type_carburant' => 'desiel', 'gps' => 1, 'capacite_assises' => 9, 'marque_id' => 8, 'created_at' => Carbon::parse('2024-10-25 09:45:32'), 'updated_at' => Carbon::parse('2024-10-25 09:45:32') ],
            [ 'id' => 26, 'nom_model' => 'C-Class', 'type_carburant' => 'desiel', 'gps' => 1, 'capacite_assises' => 5, 'marque_id' => 8, 'created_at' => Carbon::parse('2024-10-25 09:45:59'), 'updated_at' => Carbon::parse('2024-10-25 09:45:59') ],
            [ 'id' => 27, 'nom_model' => 'GLS', 'type_carburant' => 'desiel', 'gps' => 1, 'capacite_assises' => 8, 'marque_id' => 8, 'created_at' => Carbon::parse('2024-10-25 09:46:27'), 'updated_at' => Carbon::parse('2024-10-25 09:46:27') ],
            [ 'id' => 28, 'nom_model' => 'E-Class', 'type_carburant' => 'desiel', 'gps' => 0, 'capacite_assises' => 7, 'marque_id' => 8, 'created_at' => Carbon::parse('2024-10-25 09:46:45'), 'updated_at' => Carbon::parse('2024-10-25 09:46:45') ],
            [ 'id' => 29, 'nom_model' => 'AMG GLA35', 'type_carburant' => 'desiel', 'gps' => 1, 'capacite_assises' => 5, 'marque_id' => 8, 'created_at' => Carbon::parse('2024-10-25 09:47:04'), 'updated_at' => Carbon::parse('2024-10-25 09:47:04') ],
            [ 'id' => 30, 'nom_model' => 'AMG GT 63', 'type_carburant' => 'desiel', 'gps' => 1, 'capacite_assises' => 6, 'marque_id' => 8, 'created_at' => Carbon::parse('2024-10-25 09:47:21'), 'updated_at' => Carbon::parse('2024-10-25 09:47:21') ],
        ]);
    }
}
