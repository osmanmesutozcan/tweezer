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

Route::redirect('/', '/home');

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
Route::get('/home/explore', [\App\Http\Controllers\HomeController::class, 'explore'])->name('explore.index');
Route::get('/home/trending', [\App\Http\Controllers\HomeController::class, 'trending'])->name('home.trending');
Route::get('/home/who-follow', [\App\Http\Controllers\HomeController::class, 'whoFollow'])->name('home.who-follow');

Route::resource('/tweet', \App\Http\Controllers\TweetController::class)->only([
    'index', 'create', 'store', 'show'
]);
