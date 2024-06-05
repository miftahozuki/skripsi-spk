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
    Route::resource('/data-variabel', fuzzy\VariabelController::class)->except('show');
    Route::resource('/data-himpunan', fuzzy\HimpunanController::class);
    Route::resource('/data-karyawan', fuzzy\AlternatifController::class)->except('show');
    Route::resource('/data-penilaian', fuzzy\PenilaianController::class)->except('show');
    Route::get('/data-perhitungan', [fuzzy\PerhitunganController::class, 'index'])->name('data-perhitungan'); //belum fix
    Route::get('/data-hasil-akhir', [fuzzy\HasilAkhirController::class, 'index'])->name('data-hasil-akhir');

}); 
