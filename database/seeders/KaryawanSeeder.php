<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Karyawan;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $names = [
            'Ari Erdo Susanto',
            'Inggar Esti Rusadi, S.Kep., Ns',
            'Aminaturroisah, Amd. Farm',
            'Fendi hendra Warsono',
            'Afiah Meliati Putri',
            'Ahmad Daniatul F.',
            'Siti Mahmuda',
            'Hikka Nur Hasanah',
            'Ista Febriana',
            'Jamiatul Hasanah',
            'Lia Wijayawati Amd. Keb',
            'Dwi Ritmaratrih A.',
            'Moh. Ferdiyanto Maulana',
            'Fargan Budi Putra',
            'Gilang Singgih Wicaksono, Amd. Kep',
            'Dwi Rahmaniatun Badriyah',
            'Nurul Aini, S.Pd',
            'Agustin Apriliyanti, S.Tr. Kes',
            'Iqbal Abdu Firdaus, S. Kep., Ns',
        ];

        foreach ($names as $name) {
            Karyawan::create([
                'nama' => $name
            ]);
        }
    }
}
