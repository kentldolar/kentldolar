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
    // return view('welcome');
    return view('white');
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

Route::get('/whitelist', function () {
    return view('white.portfolio');
});

Route::get('/whitedetail', function () {
    return view('white.portdetail');
});

Route::get('/whitetemplate', function () {
    return view('white.template');
});

// Controller
Route::post('sendmail','TestController@ajaxTest');
Route::get('sendmail','TestController@email');

// Route::post('upload','TestController@postUpload');
// Route::get('upload','TestController@getUpload');