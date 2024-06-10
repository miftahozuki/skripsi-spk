<?php

namespace App\Http\Controllers\fuzzy;

use App\Http\Controllers\Controller;
use App\Models\Kriteria;
use App\Models\Karyawan;
use App\Models\Hasil;

class HasilAkhirController extends Controller
{
    public function index() {
        $result_id = Hasil::pluck('himpunan_id');
        $kriteria = Kriteria::with('himpunan')->get();
        $karyawans = Karyawan::with('kriteria', 'himpunan')->get();

        return view('fuzzy.data-hasil-akhir', compact('karyawans', 'kriteria', 'result_id'));
    }
}
