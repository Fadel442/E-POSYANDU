<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'userid' => '111111',
            'name' => 'bidan',
            'nik' => '111111',
            'password' => '111111',
            'role' => '1'
        ]);
        User::factory()->create([
            'userid' => '000000',
            'name' => 'admin',
            'nik' => '000000',
            'password' => '000000',
            'role' => '0'
        ]);
        User::factory()->create([
            'userid' => '222222',
            'name' => 'user',
            'nik' => '222222',
            'password' => '222222',
            'role' => '2'
        ]);
    }
}
