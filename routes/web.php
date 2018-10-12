<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@welcome');

// Movies
Route::get('movies', 'MoviesController@index')->name('movies');
Route::get('movies/create', 'MoviesController@create');
Route::get('movies/{id}', 'MoviesController@show');

// Genres
Route::get('genres', 'GenresController@index')->name('genres');

// Actors
Route::get('actors', 'ActorsController@index')->name('actors');