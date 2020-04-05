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

Auth::routes();

Route::patch('/host/{id}', 'HostController@index')->name('host');
Route::post('/host/{id}', 'HostController@indexindex')->name('create_host');
Route::post('/create/house/{id}', 'HostController@create_house')->name('create_house');
Route::get('/house/{house_id}/{subject}', 'HostController@show_house')->name('hosuedetail');
