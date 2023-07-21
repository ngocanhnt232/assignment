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
                'name' => 'Thời trang nam',
                'description' => 'Thời trang thu đông'
            ],
            [
                'name' => 'Thời trang nữ',
                'description' => 'Thời trang công sở'
            ],
            [
                'name' => 'Thắt lưng nam',
                'description' => 'Phong cách mới nhất'
            ],
            [
                'name' => 'Đồ ngủ nữ',
                'description' => 'Đồ ngủ có 102'
            ],
            [
                'name' => 'Thời trang trẻ em',
                'description' => 'Trẻ em theo xu hướng'
            ],
        ]);
    }
}
