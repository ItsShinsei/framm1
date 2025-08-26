<?php

namespace Database\Seeders;

use App\Models\Guru;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
public function run(): void
{
    Guru::insert(
    [
        [
            'name' => 'budi',
            'nama_lengkap' => 'Budi Santoso',
            'umur' => 30,
            'mapel' => 'Matematika'
        ] ,
        [
            'name' => 'siti',
            'nama_lengkap' => 'Siti Aisyah',
            'umur' => 28,
            'mapel' => 'Bahasa Inggris'
        ],
        [
            'name' => 'andi',
            'nama_lengkap' => 'Andi Wijaya',
            'umur' => 32,
            'mapel' => 'Fisika'
        ],
        [
            'name' => 'Santoso',
            'nama_lengkap' => 'Santoso Sandiaga Uno',
            'umur' => 40,
            'mapel' => 'Pendidikan Pancasila'
        ]
        

    ]
);
}
}