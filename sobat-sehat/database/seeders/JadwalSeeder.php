<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jadwal;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Jadwal::create([
            'nama_acara' => 'Makrab NF22',
            'penyelenggara' => 'HMPSTI STT-NF',
            'tanggal' => "2023-12-25",
            'lokasi' => 'Kampus B STT-NF',
            'kota' => 'Jakarta Selatan',
        ]);
    }
}
