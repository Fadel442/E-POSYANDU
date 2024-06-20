<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //jalankan seednya satu-satu


        User::updateOrCreate(
            [
                'userid' => '010003',
                'name' => 'Jihadi Wafa Al-Farisi',
                'nik' => '5201083008010003',
                'password' => Hash::make('skibidigyatt'),
                'role' => 0
            ],
            []
        );

        // User::updateOrCreate(
        //     [
        //     'name' => 'Dayat Ayu',
        //     'nik' => '1901988710750009',
        //     'password' => Hash::make('mewingcunning'),
        //     'role' => 1
        //     ],
        //     [
        //         'name' => 'Dayat Ayu',
        //         'nik' => '1901988710750009',
        //         'password' => Hash::make('mewingcunning'),
        //         'role' => 1
        //     ]
        // );

        User::updateOrCreate(
            [
                'userid' => '090003',
                'name' => 'Budi Utomo',
                'nik' => '6908137276090003',
                'password' => Hash::make('ohiocenat'),
                'role' => 2
            ],
            [
                'name' => 'Budi Utomo',
                'nik' => '6908137276090003',
                'password' => Hash::make('ohiocenat'),
                'role' => 2
            ]
        );
    }
}
