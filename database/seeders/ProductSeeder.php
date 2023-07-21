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
                'name' => 'Hoodie nam',
                'image' => 'hoodie.png',
                'price' => 300,
                'description' => 'Đẹp',
                'quantity' => 4,
                'category' => 1,
                'discount' => 1 
            ],
            [
                'name' => 'Polo nam tròn',
                'image' => 'polo.png',
                'price' => 600,
                'description' => 'Đẹp ok',
                'quantity' => 40,
                'category' => 2,
                'discount' => 2 
            ],
            [
                'name' => 'Hoodie nữ',
                'image' => 'hoodie.png',
                'price' => 400,
                'description' => 'Xinh',
                'quantity' => 14,
                'category' => 1,
                'discount' => 0 
            ],
            [
                'name' => 'Sơ mi cộc tay',
                'image' => 'xinh.png',
                'price' => 3090,
                'description' => 'ok',
                'quantity' => 124,
                'category' => 3,
                'discount' => 1 
            ],
            [
                'name' => 'Sơ mi kẻ sọc',
                'image' => 'somi.png',
                'price' => 1300,
                'description' => 'OK',
                'quantity' => 214,
                'category' => 4,
                'discount' => 3 
            ],
        ]);
    }
}
