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

Route::get('/load_data', 'HomeController@load_data')->name('home');
Route::get('/destroy_data', 'HomeController@destroy_data')->name('destroy_data');
Route::get('/check_data', 'HomeController@check_data')->name('check_data');
Route::get('/grid_data', 'HomeController@grid_data')->name('grid_data');
Route::get('/review_data', 'HomeController@review_data')->name('review_data');


