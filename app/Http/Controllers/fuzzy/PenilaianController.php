<?php

namespace App\Http\Controllers\fuzzy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kriteria;
use App\Models\Karyawan;
use RealRashid\SweetAlert\Facades\Alert;

class PenilaianController extends Controller
{
    public function index() {
        $kriteria = Kriteria::get();
        // $karyawan = Karyawan::get();
        $karyawan = Karyawan::with('kriteria')->get();
        return view('fuzzy.data-penilaian', compact('kriteria', 'karyawan'));
    }

    public function store(Request $request) {
        $kriteria = collect($request->input('kriteria'), [])->map(function($item) {
            return ['nilai' => $item];
        });
        
        $karyawan = Karyawan::find($request->input('karyawan_id'));
        $karyawan->kriteria()->sync($kriteria);
        Alert::success('Berhasil', 'Berhasil menginput nilai.');

        return redirect()->back();
    }
}
