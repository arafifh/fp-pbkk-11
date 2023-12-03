<?php

namespace Database\Seeders;

use App\Models\Pemilih;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PemilihSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 100; $i++) {
            Pemilih::factory()->create();
        }
    }
}