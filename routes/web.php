<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\SongController;

// Rotta principale che mostra la nostra pagina di benvenuto
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

//  {{{  CRUD  }}}

Route::get('/songs', [SongController::class, 'index'])->name('songs.index');
Route::post('/songs', [SongController::class, 'store'])->name('songs.store');
Route::get('/songs/create', [SongController::class, 'create'])->name('songs.create');
Route::get('/songs/{song}', [SongController::class, 'show'])->name('songs.show');
Route::get('songs/{song}/edit', [SongController::class, 'edit'])->name('songs.edit');
Route::put('songs/{song}/edit', [SongController::class, 'update'])->name('songs.update');
Route::delete('songs/{song}/edit', [SongController::class, 'destroy'])->name('songs.destroy');