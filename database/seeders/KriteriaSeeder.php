<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Kriteria;

class KriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kriteria = ['Masa Kerja', 'Pendidikan', 'Posisi', 'Kehadiran', 'Kinerja', 'Beban Kerja'];

        foreach($kriteria as $item) {
            Kriteria::Create([
             'kriteria' => $item
            ]);
        }
    }
}
