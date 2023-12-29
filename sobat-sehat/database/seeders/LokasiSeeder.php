<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Lokasi;


class LokasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Lokasi::create([
            'nama_lokasi' => 'Kampus B STT-NF',
            'alamat' => 'Jl. Raya Lenteng Agung',
            'kota' => 'Jakarta Selatan',
        ]);
    }
}
