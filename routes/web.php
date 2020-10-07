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
    return view('welcome');
});

// frontpage
Route::get('/blackandwhite', function () {
    return view('choose');
});

// black
Route::get('/blackpage', function () {
    return view('black');
});

// white
Route::get('/whitepage', function () {
    return view('white');
});