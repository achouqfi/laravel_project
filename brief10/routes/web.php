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

Route::get('/movie',[App\Http\Controllers\MoviesController::class, 'index']);


