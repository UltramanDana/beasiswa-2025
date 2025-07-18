<?php

namespace Database\Seeders;

use App\Models\Beasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BeasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Beasiswa::create([
            'nama' => 'Beasiswa Prestasi',
            'kuota' => 50,
            'keterangan' => 'Untuk mahasiswa dengan IPK di atas 3.75'
        ]);

        Beasiswa::create([
            'nama' => 'Beasiswa Ekonomi',
            'kuota' => 30,
            'keterangan' => 'Untuk mahasiswa dari keluarga kurang mampu'
        ]);

        Beasiswa::create([
            'nama' => 'Beasiswa Riset',
            'kuota' => 20,
            'keterangan' => 'Untuk mahasiswa yang aktif melakukan penelitian'
        ]);
    }
}
