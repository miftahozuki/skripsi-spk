<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\fuzzy;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function() {
    Route::get('/dashboard', [fuzzy\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/data-variabel', [fuzzy\VariabelController::class, 'index'])->name('data-variabel');
    Route::get('/data-himpunan', [fuzzy\HimpunanController::class, 'index'])->name('data-himpunan');
    Route::get('/data-karyawan', [fuzzy\AlternatifController::class, 'index'])->name('data-karyawan');
    Route::get('/data-penilaian', [fuzzy\PenilaianController::class, 'index'])->name('data-penilaian');
    Route::get('/data-perhitungan', [fuzzy\PerhitunganController::class, 'index'])->name('data-perhitungan'); //belum fix
    Route::get('/data-hasil-akhir', [fuzzy\HasilAkhirController::class, 'index'])->name('data-hasil-akhir');

}); 
