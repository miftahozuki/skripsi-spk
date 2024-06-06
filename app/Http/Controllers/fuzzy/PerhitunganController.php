<?php

namespace App\Http\Controllers\fuzzy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kriteria;

class PerhitunganController extends Controller
{
    public function index() {
        $kriteria = Kriteria::with('himpunan')->get();

        return view('fuzzy.data-perhitungan', compact('kriteria'));
    }
}
