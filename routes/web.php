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
Route::post('/house/{house_id}/{subject}/1', 'HostController@updatelisting')->name('listing');
Route::post('/house/{house_id}/{subject}/2', 'HostController@updateprice')->name('price');
Route::post('/house/{house_id}/{subject}/3', 'HostController@updatedescription')->name('description');
Route::post('/house/{house_id}/{subject}/4', 'HostController@updatephoto')->name('photo');
Route::post('/house/{house_id}/{subject}/5', 'HostController@updateamenities')->name('amenities');
Route::post('/house/{house_id}/{subject}/6', 'HostController@updatelocation')->name('location');
Route::post('/house/{id}/deletepic', 'HostController@delete_housepic')->name('deletehousepic');
Route::post('/house/{id}/publish', 'HostController@publish')->name('publish');
Route::get('/house/{house_id}/{subject}', 'HostController@show_house')->name('hosuedetail');
Route::get('/house/{id}', 'HostController@alllisting')->name('alllisting');