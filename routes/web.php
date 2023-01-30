<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\Metode_BayarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.master');
})->middleware('auth');

// Route::get('/pesan', function () {
//     return view('tabel.pesan');
// });

// Route::get('/metode_bayar', function () {
//     return view('tabel.metode_bayar');
// });

Auth::routes();

Route::middleware(['auth'])->group(function () {
    
//Tampilan
Route::get('/pesan', [PesanController::class, 'index'])->name('pesan');
Route::get('/metode_bayar', [Metode_BayarController::class, 'index'])->name('metode_bayar');

Route::get('/tambah_pesan', [PesanController::class, 'index'])->name('tambah_pesan');
});
