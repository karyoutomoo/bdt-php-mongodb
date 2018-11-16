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

Route::get('add','MovieController@create');
Route::post('add','MovieController@store');
Route::get('movies','MovieController@index');
Route::get('edit/{id}','MovieController@edit');
Route::post('edit/{id}','MovieController@update');
Route::delete('{id}','MovieController@destroy');
