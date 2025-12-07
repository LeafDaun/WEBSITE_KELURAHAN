<?php

use App\Http\Controllers\NavbarController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::prefix('/informasi')->group(function(){
      Route::get('/profil', [NavbarController::class, 'profil'])->name('profil.index');
      Route::get('/layanan/{id}', [NavbarController::class, 'layanan'])->name('layanan.show');
      Route::get('/potensi', [NavbarController::class, 'potensi'])->name('potensi.index');
      Route::get('/potensi_show/{id}', [NavbarController::class, 'potensi_show'])->name('potensi.show');
      Route::get('/galeri', [NavbarController::class, 'galeri'])->name('galeri.index');
      Route::get('/kontak', [NavbarController::class, 'kontak'])->name('kontak.index');
      Route::get('/berita/{id}', [NavbarController::class, 'show'])->name('berita.show');
      
});


