<?php

namespace App\Http\Controllers\fuzzy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kriteria;
use App\Models\Karyawan;
use App\Models\Penilaian;

class HasilAkhirController extends Controller
{
    public function index() {
        $kriteria = Kriteria::with('himpunan');
        $karyawans = Karyawan::with('kriteria')->get();
        // dd($karyawans);

        return view('fuzzy.data-hasil-akhir', compact('karyawans', 'kriteria'));
    }
}
