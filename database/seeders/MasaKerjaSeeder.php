<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Himpunan;

class MasaKerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $limit = 14;
        for ($i = 5, $count = 0; $count < $limit; $i += 3, $count++) {
            $jenis_kurva = ($count + 1 == $limit) ? 'Linear Naik' : 'Segitiga';
            Himpunan::Create([
                'kriteria_id' => 1,
                'nama_himpunan' => $count + 1 . ' Tahun',
                'nilai_a' => $i - 3,
                'nilai_b' => $i,
                'nilai_c' => ($jenis_kurva == 'Segitiga') ? $i + 3 : null,
                'jenis_kurva' => $jenis_kurva
            ]);
        }
    }
}
