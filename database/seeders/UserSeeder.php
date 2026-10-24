<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            ['username' => 'admin',    'full_name' => 'Admin User', 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'owldrake', 'full_name' => 'OWL DRAKE',  'created_at' => now(), 'updated_at' => now()],
            ['username' => 'jeanpaul', 'full_name' => 'JEAN PAUL',  'created_at' => now(), 'updated_at' => now()],
            ['username' => 'speedy',   'full_name' => 'SPEEDY',     'created_at' => now(), 'updated_at' => now()],
            ['username' => 'luffy',    'full_name' => 'LUFFY',      'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}