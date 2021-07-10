<?php

use App\Http\Controllers\MoviesController;
use Illuminate\Support\Facades\Auth;
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


// Route::get('/home', function () {

//     return view('homeDash');
// });

// Route::middleware(['auth:', 'verified'])->get('/',
//      function ()
//     {
//         return view('homeDash');
//     });

// Route::get('/','App\Http\Controllers\HomeController@index');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('L');


Route::get('/listMovie', 'App\Http\Controllers\MoviesController@index');
Route::get('/movie/create', 'App\Http\Controllers\MoviesController@create');
Route::post('/insert', 'App\Http\Controllers\MoviesController@store');
Route::get('/movie/{id}/edit', 'App\Http\Controllers\MoviesController@edit');
Route::put('/movie/{id}', 'App\Http\Controllers\MoviesController@update');
Route::delete('/movie/{id}','App\Http\Controllers\MoviesController@destroy');


Route::get('/clientList', 'App\Http\Controllers\CommentController@index');
Route::get('/showMovies/{id}/movie', 'App\Http\Controllers\CommentController@show');
Route::get('/client/create', 'App\Http\Controllers\CommentController@create');
Route::post('/insert/comment', 'App\Http\Controllers\CommentController@store');
Route::get('/client/{id}/edit', 'App\Http\Controllers\CommentController@edit');
Route::put('/client/{id}', 'App\Http\Controllers\CommentController@update');
Route::delete('/client/{id}','App\Http\Controllers\CommentController@destroy');
