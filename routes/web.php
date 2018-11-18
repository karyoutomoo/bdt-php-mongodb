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

Route::get('add','WineController@create');
Route::post('add','WineController@store');
Route::get('wines','WineController@index');
Route::get('edit/{id}','WineController@edit');
Route::post('edit/{id}','WineController@update');
Route::delete('{id}','WineController@destroy');
