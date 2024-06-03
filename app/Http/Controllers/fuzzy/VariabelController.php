<?php

namespace App\Http\Controllers\fuzzy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kriteria;
use RealRashid\SweetAlert\Facades\Alert;

class VariabelController extends Controller
{
    public function index() {
        $kriteria = Kriteria::get();
        confirmDelete('Hapus Veriabel', 'Apakah kamu yakin untuk mengapus?');
        return view('fuzzy.data-variabel', compact('kriteria'));
    }

    public function store(Request $request) {
        // dd($request->all());
        Kriteria::create($request->all());
        Alert::success('Berhasil!', 'Variabel berhasil ditambahkan');
        return redirect()->back();
    }

    public function destroy($id) {
        Kriteria::destroy($id);

        return redirect()->back();
    }
}
