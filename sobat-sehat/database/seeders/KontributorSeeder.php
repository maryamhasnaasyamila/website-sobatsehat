<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kontributor;


class KontributorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Kontributor::create([
            'nama_kontributor' => 'HMPSTI STT-NF',
            'username' => 'hmpsti',
            'password' => '12345678',
            'email' => 'hmpsti@gmail.com',
        ]);
    }
}
