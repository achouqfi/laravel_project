<?php

use App\Http\Controllers\MoviesController;
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

Auth::routes();


Route::get('/', function () {
    return view('homeDash');
});


Route::get('/login', [App\Http\Controllers\HomeController::class, 'index'])->name('login');

Route::get('/listMovie', 'App\Http\Controllers\MoviesController@index');
Route::get('/movie/create', 'App\Http\Controllers\MoviesController@create');
Route::post('/insert', 'App\Http\Controllers\MoviesController@store');
Route::get('/movie/{id}/edit', 'App\Http\Controllers\MoviesController@edit');
Route::put('/movie/{id}', 'App\Http\Controllers\MoviesController@update');
Route::delete('/movie/{id}', 'App\Http\Controllers\MoviesController@descroy');
