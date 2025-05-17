<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run(): void
    {
        DB::table('admins')->insert([
            'id' => 1,
            'username' => 'admin@admin',
            'password' => Hash::make('password'), // or use your hash directly
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
