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

//Tambah Data Pesan
Route::get('/pesan/form', [PesanController::class, 'create'])->name('create');
Route::post('/pesan', [PesanController::class, 'store'])->name('store');
//Tambah Data Metode Pembayaran
Route::get('/metode_bayar/form', [Metode_BayarController::class, 'create'])->name('create');
Route::post('/metode_bayar', [Metode_BayarController::class, 'store'])->name('store');
Route::get('/metode_bayar/edit/{id}', [Metode_BayarController::class, 'edit'])->name('edit');
});
