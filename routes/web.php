<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api', function () {
    $response = Http::get('https://api.themoviedb.org/3/movie/101?api_key=b6915a0c18e9d5e5a5d0be6f4eae3ace&language=en-US');

    return view('api.moviedb', [
        'response' => $response->object(),
    ]);
});
