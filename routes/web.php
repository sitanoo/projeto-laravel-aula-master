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

Route::get('/', 'IndexController@index');
Route::get('/contato', 'ContatoController@index');
Route::get('/contato/rh', 'ContatoController@rh');
Route::get('/institucional', 'Institucional@index');
Route::get('/produto', 'Produto@index');