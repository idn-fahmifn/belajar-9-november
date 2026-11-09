<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{BarangController, ItemController, PhotosController};

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halaman-detail/{param}', function ($par) {
    $data = $par;
    return 'Hallo ini adalah halaman detail dari : ' . $data;
})->name('halaman-detail');

Route::prefix('belajar')->group(function () {
    Route::get('/fahmi', function () {
        return 'Hallo Fahmi disini';
    })->name('string-fahmi');

    Route::get('/halaman-fahmi', function () {
        return view('fahmi');
    })->name('halaman.fahmi');
});

// memanggil fungsi yang ada di dalam controller : 
Route::get('/barang', [BarangController::class, 'halamanUtama'])->name('halaman.barang');
Route::post('/barang', [BarangController::class, 'simpan'])->name('simpan.barang');

Route::resource('/photos', PhotosController::class);
Route::resource('/items', ItemController::class);
