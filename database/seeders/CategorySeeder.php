<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name' => 'Artístico',
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'name' => 'Paisagem',
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'name' => 'Futebol',
                'created_at' => now(), 
                'updated_at' => now()
            ],
        ]);
    }
}
