<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\SongController;

// Rotta principale che mostra la nostra pagina di benvenuto
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

// Rotte per le canzoni
Route::get('/songs', [SongController::class, 'index'])->name('songs.index');
Route::get('/songs/create', [SongController::class, 'create'])->name('songs.create');
Route::post('/songs', [SongController::class, 'store'])->name('songs.store');