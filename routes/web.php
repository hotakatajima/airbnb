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

Route::get('/', 'HouseController@index')->name('home');
Route::get('/house/listing/{id}/view', 'HouseController@eachhouse')->name('eachhouse');
Route::patch('/host/{id}', 'UserController@index')->name('host');
Route::post('/host/{id}', 'UserController@indexindex')->name('create_host');
Route::post('/create/house/{id}', 'HouseController@create_house')->name('create_house');
Route::post('/house/{house_id}/{subject}/1', 'HouseController@updatelisting')->name('listing');
Route::post('/house/{house_id}/{subject}/2', 'HouseController@updateprice')->name('price');
Route::post('/house/{house_id}/{subject}/3', 'HouseController@updatedescription')->name('description');
Route::post('/house/{house_id}/{subject}/4', 'HouseController@updatephoto')->name('photo');
Route::post('/house/{house_id}/{subject}/5', 'HouseController@updateamenities')->name('amenities');
Route::post('/house/{house_id}/{subject}/6', 'HouseController@updatelocation')->name('location');
Route::post('/house/{id}/deletepic', 'HouseController@delete_housepic')->name('deletehousepic');
Route::post('/house/{id}/publish', 'HouseController@publish')->name('publish');
Route::get('/house/{house_id}/{subject}', 'HouseController@show_house')->name('hosuedetail');
Route::get('/house/{id}', 'HouseController@alllisting')->name('alllisting');
Route::post('/reservation/{user_id}/{house_id}', 'ReservationController@reservation')->name('reservation');
Route::get('/yourtrip/user/{id}', 'ReservationController@yourtrip')->name('yourtrip');
Route::get('/yourreservation/user/{id}', 'ReservationController@yourreservation')->name('yourreservation');
Route::get('/user/{id}', 'UserController@userprofile')->name('userprofile');
Route::get('/user/edit/{id}', 'UserController@useredit')->name('useredit');
Route::post('/user/upload/{id}', 'UserController@uploadprofile')->name('uploadprofile');