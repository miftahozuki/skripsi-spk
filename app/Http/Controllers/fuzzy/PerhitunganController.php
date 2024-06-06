<?php

namespace App\Http\Controllers\fuzzy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kriteria;
use App\Models\Karyawan;

class PerhitunganController extends Controller
{
    public function index() {
        $kriteria = Kriteria::with('himpunan')->get();
        $karyawans = Karyawan::with('kriteria')->get();

        return view('fuzzy.data-perhitungan', compact('kriteria', 'karyawans'));
    }
}
