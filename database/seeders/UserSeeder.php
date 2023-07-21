<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
        [
        'name' => 'Tạ Quang Huy',
        'password' => '12345678',
        'avatar' => 'avatar 1',
        'email' => 'huytqph27342@fpt.edu.vn',
        'phone_number' => '0862178842',
        'address' => 'Nam Định',
        'role' => 0
        ],
        [
            'name' => 'Nguyễn Khánh Nguyên',
            'password' => '12345678',
            'avatar' => 'avatar 2',
            'email' => 'nguyennkph27339@fpt.edu.vn',
            'phone_number' => '0862178843',
            'address' => 'Nghệ An',
            'role' => 0
        ],
        [
            'name' => 'Ngọc Ánh',
            'password' => '12345678',
            'avatar' => 'avatar 3',
            'email' => 'anhntnph27324@fpt.edu.vn',
            'phone_number' => '0862178841',
            'address' => 'Hà Nội',
            'role' => 0
        ],
        [
            'name' => 'demo 1',
            'password' => '12345678',
            'avatar' => 'avatar 4',
            'email' => 'jqk@fpt.edu.vn',
            'phone_number' => '0123',
            'address' => 'Hà Nam',
            'role' => 1
        ],
        [
            'name' => 'demo 2',
            'password' => '12345678',
            'avatar' => 'avatar 5',
            'email' => 'demo2@fpt.edu.vn',
            'phone_number' => 'jqk1',
            'address' => 'Vĩnh Long',
            'role' => 0
        ]
        ]);
    }
}
