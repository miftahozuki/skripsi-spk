<?php

namespace App\Http\Controllers\fuzzy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kriteria;
use App\Models\Karyawan;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\fuzzy\KurvaController;
use App\Models\Hasil;

class PerhitunganController extends Controller
{
    public function index() {
        confirmDelete();
        $kriteria = Kriteria::with('himpunan')->get();
        $karyawans = Karyawan::with('kriteria')->get();
        
        return view('fuzzy.data-perhitungan.index', compact('kriteria', 'karyawans'));
    }
    
    public function show($id) {
        $id = explode('-', $id);
        confirmDelete();

        Hasil::truncate();
        $himpunan = DB::table('tb_himpunan as h')
                    ->join('tb_penilaian as p', 'h.kriteria_id', '=', 'p.kriteria_id')
                    ->whereIn('h.id_himpunan', $id)
                    ->get();
       
        foreach ($himpunan as $item) {
            $kurva = new KurvaController($item->id_himpunan);
            $jenis = str_replace(' ', '', $item->jenis_kurva);
            $nilai = $kurva->$jenis($item->nilai);

            $data = [
                'karyawan_id' => $item->karyawan_id,
                'himpunan_id' => $item->id_himpunan,
                'nilai' => $nilai
            ];
            Hasil::create($data);


            
        }

        $kriteria = Kriteria::with('himpunan')->get();
        $karyawans = Karyawan::with('kriteria', 'himpunan')->get();

        return view('fuzzy.data-perhitungan.show', compact('kriteria', 'karyawans', 'id'));
    }

}
