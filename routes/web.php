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

Route::get('/', 'TodoController@index');
Route::post('/', 'TodoController@store');
Route::get('/edit/{id}',['as'=>'getEditRoute', 'uses'=>'TodoController@edit']);
Route::post('/edit/{id}',['as'=>'postEditRoute', 'uses'=>'TodoController@update']);
Route::get('/delete/{id}',['as'=>'getDeleteRoute', 'uses'=>'TodoController@delete']);