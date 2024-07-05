<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\fuzzy;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;

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
    return redirect('/login');
});

Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('/', fn() => redirect('/login'));
    Route::get('/profile', [UserController::class, 'index']);
    Route::put('/profile', [UserController::class, 'update'])->name('profile.update');
    Route::post('/profile/change-password', [UserController::class, 'updatePassword'])->name('change-password');
    Route::get('/dashboard', [fuzzy\DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/data-variabel', fuzzy\VariabelController::class)->except('show');
    Route::resource('/data-himpunan', fuzzy\HimpunanController::class);
    Route::resource('/data-karyawan', fuzzy\AlternatifController::class)->except('show');
    Route::resource('/data-penilaian', fuzzy\PenilaianController::class)->except('show');
    Route::resource('/data-perhitungan', fuzzy\PerhitunganController::class)->except('show');
    Route::get('/data-perhitungan/query={id}', [fuzzy\PerhitunganController::class, 'show'])->name('data-perhitungan.show');
    Route::get('/data-hasil-akhir', [fuzzy\HasilAkhirController::class, 'index'])->name('data-hasil-akhir');
    Route::get('/data-hasil-akhir/cetak', [fuzzy\HasilAkhirController::class, 'cetak'])->name('data-hasil-akhir.cetak');

}); 

Route::get('/generate', function(){
    \Illuminate\Support\Facades\Artisan::call('storage:link');
    echo 'ok';
 });