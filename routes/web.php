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

Route::get('/', function () {
    return view('home/index');
})->name('home');

Route::get('/privacy', function() {
    return view('static/privacy');
})->name('privacy');

Route::get('/terms', function() {
    return view('static/terms');
})->name('terms');

Route::get('/about', 'AboutController')->name('about');

Route::get('/join', 'JoinController')->name('join');
