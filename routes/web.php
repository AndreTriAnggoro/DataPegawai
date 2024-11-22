<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', [PegawaiController::class, 'index'])->name('pegawai.index');
Route::get('/create-pegawai', [PegawaiController::class, 'create'])->name('pegawai.create');
Route::post('/store-pegawai', [PegawaiController::class, 'store'])->name('pegawai.store');
Route::get('/show/{id}/pegawai', [PegawaiController::class, 'show'])->name('pegawai.show');
Route::put('/pegawai/{id}', [PegawaiController::class, 'update'])->name('pegawai.update');