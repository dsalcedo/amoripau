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


Route::get('/','TiendaController@index')->name('welcome');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/detalle/{producto_id}','TiendaController@view')->name('detalle');
Auth::routes();

