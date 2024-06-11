<?php

namespace App\Http\Controllers\fuzzy;

use App\Http\Controllers\Controller;
use App\Models\Kriteria;
use App\Models\Karyawan;
use App\Models\Hasil;
use Barryvdh\DomPDF\Facade\Pdf;

class HasilAkhirController extends Controller
{
    public function index() {
        $result_id = Hasil::pluck('himpunan_id');
        $kriteria = Kriteria::with('himpunan')->get();
        $karyawans = Karyawan::with('kriteria', 'himpunan')->get();

        return view('fuzzy.data-hasil-akhir', compact('karyawans', 'kriteria', 'result_id'));
    }

    public function cetak() {

        $result_id = Hasil::pluck('himpunan_id');
        $kriteria = Kriteria::with('himpunan')->get();
        $karyawans = Karyawan::with('kriteria', 'himpunan')->get();
        $karyawans = $karyawans->sortByDesc(function ($karyawan) {
            return $karyawan->himpunan->sum('pivot.nilai');
        });

        $pdf = Pdf::loadView('cetak-pdf.hasil-akhir', ['kriteria' => $kriteria, 'karyawans' => $karyawans, 'id' => $result_id]);
        $pdf->setPaper('a4', 'landscape');
        return $pdf->stream('hasil-akhir.pdf');

    }
}
