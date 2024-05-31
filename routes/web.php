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
}); 
