<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Himpunan;

class HimpunanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
      
        DB::table('tb_himpunan')->insert([
            //pendidikan
            [
                'nama_himpunan' => 'SD',
                'kriteria_id' => 2,
                'jenis_kurva' => 'Segitiga',
                'nilai_a' => 0,
                'nilai_b' => 1,
                'nilai_c' => 2,
                'nilai_d' => null
    
        ],
        [
            'nama_himpunan' => 'SMP',
            'kriteria_id' => 2,
            'jenis_kurva' => 'Segitiga',
            'nilai_a' => 1,
            'nilai_b' => 2,
            'nilai_c' => 3,
            'nilai_d' => null

        ],
        [
            'nama_himpunan' => 'SMA/SMF/D1-D3',
            'kriteria_id' => 2,
            'jenis_kurva' => 'Segitiga',
            'nilai_a' => 2,
            'nilai_b' => 3,
            'nilai_c' => 4,
            'nilai_d' => null

        ],
        [
            'nama_himpunan' => 'D3-UMUM',
            'kriteria_id' => 2,
            'jenis_kurva' => 'Segitiga',
            'nilai_a' => 3,
            'nilai_b' => 4,
            'nilai_c' => 5,
            'nilai_d' => null

        ],
        [
            'nama_himpunan' => 'S1-UMUM',
            'kriteria_id' => 2,
            'jenis_kurva' => 'Segitiga',
            'nilai_a' => 4,
            'nilai_b' => 5,
            'nilai_c' => 6,
            'nilai_d' => null

        ],
        [
            'nama_himpunan' => 'D3 Kesehatan',
            'kriteria_id' => 2,
            'jenis_kurva' => 'Segitiga',
            'nilai_a' => 5,
            'nilai_b' => 6,
            'nilai_c' => 7,
            'nilai_d' => null

        ],
        [
            'nama_himpunan' => 'S1 Kebidanan/Keperawatan/Kesehatan',
            'kriteria_id' => 2,
            'jenis_kurva' => 'Segitiga',
            'nilai_a' => 6,
            'nilai_b' => 7,
            'nilai_c' => 8,
            'nilai_d' => null

        ],
        [
            'nama_himpunan' => 'Ners/Dokter/Apoteker',
            'kriteria_id' => 2,
            'jenis_kurva' => 'Segitiga',
            'nilai_a' => 7,
            'nilai_b' => 9,
            'nilai_c' => 10,
            'nilai_d' => null

        ],
        [
            'nama_himpunan' => 'Dokter Spesialis',
            'kriteria_id' => 2,
            'jenis_kurva' => 'Bahu Kiri',
            'nilai_a' => 9,
            'nilai_b' => 10,
            'nilai_c' => null,
            'nilai_d' => null

        ],

            //posisi
        [
            'nama_himpunan' => 'Fungsional Umum',
            'kriteria_id' => 3,
            'jenis_kurva' => 'Bahu Kiri',
            'nilai_a' => 0,
            'nilai_b' => 2,
            'nilai_c' => 4,
            'nilai_d' => null

        ],
        [
            'nama_himpunan' => 'Fungsional Tertentu',
            'kriteria_id' => 3,
            'jenis_kurva' => 'Segitiga',
            'nilai_a' => 2,
            'nilai_b' => 4,
            'nilai_c' => 6,
            'nilai_d' => null
        ],
        [
            'nama_himpunan' => 'Katim',
            'kriteria_id' => 3,
            'jenis_kurva' => 'Segitiga',
            'nilai_a' => 4,
            'nilai_b' => 6,
            'nilai_c' => 8,
            'nilai_d' => null
        ], 
        [
            'nama_himpunan' => 'Penanggung Jawab Teknis',
            'kriteria_id' => 3,
            'jenis_kurva' => 'Segitiga',
            'nilai_a' => 6,
            'nilai_b' => 8,
            'nilai_c' => 10,
            'nilai_d' => null
        ], 
        [
            'nama_himpunan' => 'Karu/Koordinator/Pengelola Sekretariat',
            'kriteria_id' => 3,
            'jenis_kurva' => 'Linear Naik',
            'nilai_a' => 8,
            'nilai_b' => 10,
            'nilai_c' => null,
            'nilai_d' => null
        ],

        // kriteria kehadiran
        [
            'nama_himpunan' => 'Kurang',
            'kriteria_id' => 4,
            'jenis_kurva' => 'Bahu Kanan',
            'nilai_a' => 70,
            'nilai_b' => 75,
            'nilai_c' => null,
            'nilai_d' => null
        ],
        [
            'nama_himpunan' => 'Cukup',
            'kriteria_id' => 4,
            'jenis_kurva' => 'Trapesium',
            'nilai_a' => 70,
            'nilai_b' => 75,
            'nilai_c' => 85,
            'nilai_d' => 90
        ],
        [
            'nama_himpunan' => 'Baik',
            'kriteria_id' => 4,
            'jenis_kurva' => 'Bahu Kiri',
            'nilai_a' => 85,
            'nilai_b' => 90,
            'nilai_c' => null,
            'nilai_d' => null
        ],

        // kinerja
        [
            'nama_himpunan' => 'Sangat Kurang',
            'kriteria_id' => 5,
            'jenis_kurva' => 'Bahu Kanan',
            'nilai_a' => 30,
            'nilai_b' => 35,
            'nilai_c' => null,
            'nilai_d' => null
        ],
        [
            'nama_himpunan' => 'Kurang',
            'kriteria_id' => 5,
            'jenis_kurva' => 'Trapesium',
            'nilai_a' => 30,
            'nilai_b' => 35,
            'nilai_c' => 50,
            'nilai_d' => 55
        ],
        [
            'nama_himpunan' => 'Cukup',
            'kriteria_id' => 5,
            'jenis_kurva' => 'Trapesium',
            'nilai_a' => 50,
            'nilai_b' => 55,
            'nilai_c' => 75,
            'nilai_d' => 80
        ],
        [
            'nama_himpunan' => 'Baik',
            'kriteria_id' => 5,
            'jenis_kurva' => 'Trapesium',
            'nilai_a' => 75,
            'nilai_b' => 80,
            'nilai_c' => 85,
            'nilai_d' => 90
        ],
        [
            'nama_himpunan' => 'Sangat Baik',
            'kriteria_id' => 5,
            'jenis_kurva' => 'Bahu Kiri',
            'nilai_a' => 30,
            'nilai_b' => 35,
            'nilai_c' => 85,
            'nilai_d' => 90
        ],

        // Beban Kerja
        [
            'nama_himpunan' => 'Kantor, Sopir, IT',
            'kriteria_id' => 6,
            'jenis_kurva' => 'Segitiga',
            'nilai_a' => 0,
            'nilai_b' => 7,
            'nilai_c' => 10,
            'nilai_d' => null
        ],
        [
            'nama_himpunan' => 'IGD, HCU, Isolasi, Ponek, Rawat Inap, RB, Poli, Lab, Gizi, RM.IPS, Laundry, CS, Satpam, Radiologi, OK, Farmasi, Loket, Pembayaran',
            'kriteria_id' => 6,
            'jenis_kurva' => 'Bahu Kiri',
            'nilai_a' => 7,
            'nilai_b' => 10,
            'nilai_c' => null,
            'nilai_d' => null
        ],
    ]);
    }

}
