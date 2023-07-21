<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('discounts')->insert([
            [
                'name' => 'Mừng hè rực rỡ',
                'value' => 10,
                'date' => '2023-7-19'
            ],
            [
                'name' => 'Combo đi biển',
                'value' => 25,
                'date' => '2023-8-19'
            ],
            [
                'name' => 'Mừng khai trương shop 10 ngày',
                'value' => 10,
                'date' => '2023-7-19'
            ],
            [
                'name' => 'Mừng khai trương 20 ngày',
                'value' => 20,
                'date' => '2023-7-29'
            ],
            [
                'name' => 'Thích thì giảm giá',
                'value' => 90,
                'date' => '2023-10-19'
            ],
        ]);
    }
}
