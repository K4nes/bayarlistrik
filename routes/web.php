<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarifController;
use App\Http\Controllers\PelangganController;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
    ]);
});

Route::get('/daftarpelanggan', [PelangganController::class, 'index']);
Route::get('/daftarpelanggan', [PelangganController::class, 'index'])->name('pelanggan.index');
Route::get('/daftarpelanggan/create', [PelangganController::class, 'create']);
Route::post('/daftarpelanggan', [PelangganController::class, 'store']);
Route::get('/daftarpelanggan/{id}/edit', [PelangganController::class, 'edit'])->name('pelanggan.edit');
Route::put('/daftarpelanggan/{id}', [PelangganController::class, 'update'])->name('pelanggan.update');
Route::delete('/daftarpelanggan/{id}', [PelangganController::class, 'destroy'])->name('pelanggan.destroy');



Route::get('/halamantarif', [TarifController::class, 'index'])->name('halamantarif.index');
Route::post('/halamantarif', [TarifController::class, 'store'])->name('halamantarif.store');
Route::delete('/halamantarif/{id}', [TarifController::class, 'destroy'])->name('halamantarif.destroy');
Route::get('/halamantarif/{id}/edit', [TarifController::class, 'edit'])->name('halamantarif.edit');
Route::put('/halamantarif/{id}', [TarifController::class, 'update'])->name('halamantarif.update');



