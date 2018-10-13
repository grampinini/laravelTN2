<?php

Route::get('/', 'HomeController@welcome');

// Movies

Route::get('movies/create', 'MoviesController@create');
Route::post('movies/create', 'MoviesController@store');
Route::get('movies/{id}/edit', 'MoviesController@edit');
Route::post('movies/{id}/edit', 'MoviesController@update');

Route::get('movies/{id}', 'MoviesController@show');
Route::get('movies', 'MoviesController@index')->name('movies');



// Genres
Route::get('genres', 'GenresController@index')->name('genres');
Route::get('genres/{id}/movies', 'GenresController@show');


// Actors
Route::get('actors', 'ActorsController@index')->name('actors');