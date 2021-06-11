<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;

Route::get('/', [MoviesController::class, 'index'])->name('movie.index');
Route::get('/movie/{movieId}', [MoviesController::class, 'show'])->name('movie.show');
