<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('banners')->insert([
            [
            'image' => 'anh1.png',
            'content' => 'content1'
            ],
            [
                'image' => 'anh2.png',
                'content' => 'content2'
            ],
            [
                'image' => 'anh3.png',
                'content' => 'content3'
            ],
            [
                'image' => 'anh4.png',
                'content' => 'content4'
            ],
            [
                'image' => 'anh5.png',
                'content' => 'content5'
            ],
        ]);
    }
}
