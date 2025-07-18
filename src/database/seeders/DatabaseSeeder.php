<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        $user = User::firstOrCreate(
            ['email' => 'admin@admin.com'],
            [
                'name' => 'Admin',
                'password' => bcrypt('password'), // default password
            ]
        );

        
        if (!$user->hasRole('super_admin')) {
            $user->assignRole('super_admin');
        }

        // Jalankan seeder lain
        $this->call([
            MahasiswaSeeder::class,
            BeasiswaSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
        ]);
    }
}
