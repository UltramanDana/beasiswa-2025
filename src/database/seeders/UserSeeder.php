<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::firstOrCreate(
            ['email' => 'admin@admin.com'],
            ['name' => 'Super Admin', 'password' => Hash::make('password')]
        );
        $admin->assignRole('super_admin');

        $mahasiswa1 = User::firstOrCreate(
            ['email' => 'mahasiswa1@admin.com'],
            ['name' => 'mahasiswa Account', 'password' => Hash::make('password')]
        );
        $mahasiswa1->assignRole('mahasiswa');

        $mahasiswa2 = User::firstOrCreate(
            ['email' => 'mahasiswa2@admin.com'],
            ['name' => 'mahasiswa2 Account', 'password' => Hash::make('password')]
        );
        $mahasiswa2->assignRole('mahasiswa');

        $user = User::firstOrCreate(
            ['email' => 'user@admin.com'],
            ['name' => 'User Account', 'password' => Hash::make('password')]
        );
        $user->assignRole('user');
    }
}