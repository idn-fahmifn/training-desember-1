<?php

namespace Database\Seeders;

use App\Models\Mobil;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MobilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // membuat data yang akan dikirmkan oleh model Mobil

        Mobil::create([
            'nama_mobil' => 'Fortuner',
            'tipe' => 'lcgc',
            'no_polisi' => 'B 1234 BB'
        ]);

    }
}
