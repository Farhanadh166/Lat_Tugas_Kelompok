<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produk', function () {
    return view('produk.index');
});

Route::get('/produk/create', [ProdukController::class, 'create'])->name('produk.create');

// Route resource untuk produk
Route::resource('produk', ProdukController::class);
