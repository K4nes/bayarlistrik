<?php

use Illuminate\Support\Facades\Route;
use App\Models\daftarpelanggan;
use App\Http\Controllers\PelangganController;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
    ]);
});

Route::get('/daftarpelanggan', [PelangganController::class, 'index']);
Route::get('/daftarpelanggan/create', [PelangganController::class, 'create']);
Route::post('/daftarpelanggan', [PelangganController::class, 'store']);
Route::get('/daftarpelanggan/{id}/edit', [PelangganController::class, 'edit'])->name('pelanggan.edit');
Route::put('/daftarpelanggan/{id}', [PelangganController::class, 'update'])->name('pelanggan.update');
Route::delete('/daftarpelanggan/{id}', [PelangganController::class, 'destroy'])->name('pelanggan.destroy');




Route::get('/pagetarif', function () {
    return view('pagetarif', [
        'title' => 'Halaman Tarif',
    ]);
});



