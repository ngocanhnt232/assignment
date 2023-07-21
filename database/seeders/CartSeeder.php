<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cart')->insert([
            [
                'user' => 1,
                'product' => 8,
                'image' => 'huy.png',
                'name' => 'Áo nam',
                'price' => 500,
                'quantity' => 4,
                'total' => 2000,
                'bill' => 2
            ],
            [
                'user' => 2,
                'product' => 6,
                'image' => 'hehe.png',
                'name' => 'Áo nữ',
                'price' => 400,
                'quantity' => 4,
                'total' => 2000,
                'bill' => 3
            ],
            [
                'user' => 3,
                'product' => 18,
                'image' => 'huy.png',
                'name' => 'Áo nam',
                'price' => 100,
                'quantity' => 4,
                'total' => 400,
                'bill' => 3
            ],
            [
                'user' => 4,
                'product' => 28,
                'image' => 'huy1.png',
                'name' => 'Áo nam',
                'price' =>1500,
                'quantity' => 4,
                'total' => 2000,
                'bill' => 21
            ],
            [
                'user' => 5,
                'product' => 85,
                'image' => 'htuy.png',
                'name' => 'Áo dài',
                'price' => 500,
                'quantity' => 4,
                'total' => 2000,
                'bill' => 3
            ],
        ]);
    }
}
