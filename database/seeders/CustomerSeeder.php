<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('customers')->insert([
            ['full_name' => 'Naruto Uzumaki',  'email' => 'naruto@example.com',  'phone' => '0917-318-4420', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Satoru Gojo',     'email' => 'gojo@example.com',    'phone' => '0918-562-7731', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Tanjiro Kamado',  'email' => 'tanjiro@example.com', 'phone' => '0919-204-9183', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Son Goku',        'email' => 'goku@example.com',    'phone' => '0920-745-3066', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Levi Ackerman',   'email' => 'levi@example.com',    'phone' => '0921-689-1254', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}