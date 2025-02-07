<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Karyawan;
use App\Models\Penilaian;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            KriteriaSeeder::class,
            KaryawanSeeder::class,
            HimpunanSeeder::class,
            MasaKerjaSeeder::class,
            PenilaianSeeder::class,
            UserSeeder::class
        ]);
    }
}
