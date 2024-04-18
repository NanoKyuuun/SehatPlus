<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@gamil.com',
            'password' => bcrypt('password')
        ]);
        $admin->assignRole('admin');

        $dokter = User::create([
            'name' => 'dokter',
            'email' => 'dokter@gamil.com',
            'password' => bcrypt('password')
        ]);
        $dokter->assignRole('dokter');

        $pasien = User::create([
            'name' => 'pasien',
            'email' => 'pasien@gamil.com',
            'password' => bcrypt('password')
        ]);
        $pasien->assignRole('pasien');
    }
}
