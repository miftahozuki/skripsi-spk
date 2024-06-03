<?php

namespace App\Http\Controllers\fuzzy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Karyawan;
use RealRashid\SweetAlert\Facades\Alert;

class AlternatifController extends Controller
{
    public function index() {
        $karyawan = Karyawan::get();
        confirmDelete('Hapus Karyawan', 'Apakah anda yakin ingin menghapus?');

        return view('fuzzy.data-alternatif', compact('karyawan'));
    }

    public function store(Request $request) {
        Karyawan::create($request->all());
        Alert::success('Berhasil', 'Karyawan ditambahkan.');
        return redirect()->back();
    }

    public function destroy($id) {
        Karyawan::destroy($id);

        return redirect()->back();
    }
}
