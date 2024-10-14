<?php

use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Route;

// Mengubah route untuk memanggil controller BukuController
Route::get('/', [BukuController::class, 'index']); // Memanggil metode index dari BukuController
Route::get('/buku/add', function () {
    return view('tambahbuku');
});
Route::resource('buku', BukuController::class);