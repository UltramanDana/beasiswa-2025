<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mahasiswa::create([
            'user_id' => 1,
            'nim' => '230001',
            'nama' => 'John Doe',
            'jurusan' => 'Teknik Informatika',
            'no_hp' => '081234567890',
            'status_beasiswa' => 'active',
        ]);

        Mahasiswa::create([
            'user_id' => 2,
            'nim' => '230002',
            'nama' => 'Jane Smith',
            'jurusan' => 'Sistem Informasi',
            'no_hp' => '082345678901',
            'status_beasiswa' => 'inactive',
        ]);

        Mahasiswa::create([
            'user_id' => 3,
            'nim' => '230003',
            'nama' => 'Budi Santoso',
            'jurusan' => 'Manajemen',
            'no_hp' => '083456789012',
            'status_beasiswa' => 'active',
        ]);
    }
}
