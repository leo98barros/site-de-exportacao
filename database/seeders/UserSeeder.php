<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'ADM',
                'email' => 'adm@gmail.com',
                'password' => Hash::make(123456),
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'name' => 'INFO',
                'email' => 'info@gmail.com',
                'password' => Hash::make(123456),
                'created_at' => now(), 
                'updated_at' => now()
            ],
        ]);
    }
}
