<?php

namespace App\Http\Controllers\fuzzy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kriteria;
use App\Models\Himpunan;
use RealRashid\SweetAlert\Facades\Alert;

class HimpunanController extends Controller
{
    public function index() {
        $kriteria = Kriteria::with('himpunan')->get();
        // dd($kriteria);
        return view('fuzzy.data-himpunan', compact('kriteria'));
    }

    public function store(Request $request) {
        $himpunan = new Himpunan;
        $himpunan->fill($request->all());
        $himpunan->save();
        Alert::success('Berhasil', 'Data himpunan telah ditambahkan.');

        return redirect()->back();
    }

    public function update(Request $request, $id) {
        $himpunan = Himpunan::find($id);
        $himpunan->fill($request->all());
        $himpunan->save();
        Alert::success('Berhasil', 'Data Himpunan berhasil diedit.');
        return redirect()->back();
    }
}
