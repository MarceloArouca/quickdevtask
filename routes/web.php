<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;

//Route::get('/', [app\Http\Controllers\MoviesController::class], ['index']);

//Route::get('/', [MoviesController::class]->name ('movies'));
//Route::get('/movies/{movies}', [MoviesController::class]->name ());

//Roube::get('/', )

Route::get('/', 'MoviesController@index')->name ('movie.index');
Route::get('/movie/{movie}', 'MoviesController@show')->name ('movie.show');

//Route::get ('/', [MoviesController::class], 'index');

//Route::get('/', function () {
//Route::get ('/', [app\Http\Controllers\MoviesController::class], 'index');


