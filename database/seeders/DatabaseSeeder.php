<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Kelas::create(['nama_kelas' => 'A']);
        Kelas::create(['nama_kelas' => 'B']);
        Kelas::create(['nama_kelas' => 'C']);
        Kelas::create(['nama_kelas' => 'D']);
    }
}