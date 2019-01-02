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
//Route::get('/user','UserModel\user@test');
//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/user/{id}','User\user@test');
Route::get('/user/add','User\user@add');
Route::get('/user/update/{id}','User\user@update');
Route::get('/user/delete/{id}','User\user@delete');
Route::get('/user/select','User\user@select');
Route::get('/user/list','User\user@list');