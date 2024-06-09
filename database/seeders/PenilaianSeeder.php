<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Penilaian;

class PenilaianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $masa_kerja = [44, 8, 11, 44, 23, 29, 32, 32, 41, 8, 41, 44, 23, 29, 23, 32, 26, 14, 5];
        $pendidikan = [2, 9, 6, 3, 6, 3, 4, 4, 3, 3, 6, 3, 3, 5, 6, 3, 5, 7, 9];
        $posisi = [2, 4, 4, 2, 4, 2, 2, 2, 2, 2, 4, 2, 2, 2, 4, 2, 2, 4, 4];
        $beban_kerja = [10, 10, 10, 7, 10, 10, 7, 7, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10];
        $kinerja = [90, 78, 95, 85, 72, 88, 75, 82, 80, 91, 89, 93, 87, 94, 86, 97, 92, 96, 98];
        $kehadiran = [72.06, 74.69, 88.83, 82.96, 75.36, 55.94, 95.95, 64.7, 67.13, 46.65, 93.13, 77.59, 95.67, 82.75, 72.58, 82.18, 74.77, 64.56, 91.75];

        foreach($masa_kerja as $index => $item) {           
            $data = [
                'kriteria_id' => 1,
                'karyawan_id' => $index +1,
                'nilai' => $item
            ];

            Penilaian::create($data);
        }

        foreach($pendidikan as $index => $item) {           
            $data = [
                'kriteria_id' => 2,
                'karyawan_id' => $index +1,
                'nilai' => $item
            ];
            Penilaian::create($data);
        }

        foreach($posisi as $index => $item) {           
            $data = [
                'kriteria_id' => 3,
                'karyawan_id' => $index +1,
                'nilai' => $item
            ];
            Penilaian::create($data);
        }

        foreach($kehadiran as $index => $item) {           
            $data = [
                'kriteria_id' => 4,
                'karyawan_id' => $index +1,
                'nilai' => $item
            ];
            Penilaian::create($data);
        }

        foreach($kinerja as $index => $item) {           
            $data = [
                'kriteria_id' => 5,
                'karyawan_id' => $index +1,
                'nilai' => $item
            ];
            Penilaian::create($data);
        }

        foreach($beban_kerja as $index => $item) {           
            $data = [
                'kriteria_id' => 6,
                'karyawan_id' => $index +1,
                'nilai' => $item
            ];
            Penilaian::create($data);
        }
    }
}
