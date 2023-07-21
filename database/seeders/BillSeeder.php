<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bill')->insert([
        [
            'user' => 1,
            'bill_name' => 'name1',
            'address' => 'Phương Canh, Nam Từ Liêm',
            'phone' => '086217',
            'payment' => 1,
            'status' => 1,
            'total' => 435.5,
        ],
        [
            'user' => 2,
            'bill_name' => 'name2',
            'address' => 'Phương Canh, Nam Từ Liêm',
            'phone' => '086218',
            'payment' => 2,
            'status' => 2,
            'total' => 4355.5,
        ],
        [
            'user' => 3,
            'bill_name' => 'name3',
            'address' => 'Phương Canh, Nam Từ Liêm',
            'phone' => '086213',
            'payment' => 3,
            'status' => 3,
            'total' => 4395.5,
        ],
        [
            'user' => 4,
            'bill_name' => 'name4',
            'address' => 'Phương Canh, Nam Từ Liêm',
            'phone' => '086214',
            'payment' => 4,
            'status' => 4,
            'total' => 1435.5,
        ],
        [
            'user' => 5,
            'bill_name' => 'name5',
            'address' => 'Phương Canh, Nam Từ Liêm',
            'phone' => '086215',
            'payment' => 5,
            'status' => 5,
            'total' => 4353.5,
        ]
        ]);
    }
}
