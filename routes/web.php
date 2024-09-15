<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//route untuk kategori
use App\Http\Controllers\KategoriController;
Route::resource('kategori', KategoriController::class);

//route untuk lokasi
use App\Http\Controllers\LokasiController;
Route::resource('lokasi', LokasiController::class);

//route untuk event
use App\Http\Controllers\EventController;
Route::resource('event', EventController::class);

//route untuk wisata
use App\Http\Controllers\WisataController;
Route::resource('wisata', WisataController::class);