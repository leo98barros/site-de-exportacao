<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Artístico',
                'description' => 'Quadro a rua acesa',
                'image' => asset('img/produtos/PS-1.jpg'),
                'price' => 120,
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Artístico',
                'description' => 'Aquarela Forest in the hill',
                'image' => asset('img/produtos/PS-2.jpg'),
                'price' => 120,
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Artístico',
                'description' => 'Noite estrelada de Van Gogh',
                'image' => asset('img/produtos/PS-3.jpg'),
                'price' => 120,
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'name' => 'Paisagem',
                'description' => 'Quadro triplo Monte Fuji',
                'image' => asset('img/produtos/AR-1.jpg'),
                'price' => 59,
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Artístico',
                'description' => 'Quadro solitário banco',
                'image' => asset('img/produtos/AR-2.jpg'),
                'price' => 59,
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'name' => 'Futebol',
                'description' => 'Quadro L. Messi',
                'image' => asset('img/produtos/FB-1.jpg'),
                'price' => 99,
                'category_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Futebol',
                'description' => 'Quadro emoldurado Neymar Jr.',
                'image' => asset('img/produtos/FB-2.jpg'),
                'price' => 99,
                'category_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Futebol',
                'description' => 'Quadro triplo Cristiano Ronaldo',
                'image' => asset('img/produtos/FB-3.jpg'),
                'price' => 99,
                'category_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
