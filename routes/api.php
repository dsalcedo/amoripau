<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['namespace'=>'api'], function($r) {

    $r->post('/add/shopping/cart','ShoppingCartController@add')->name('shoping.cart.add');
    $r->get('/show/shopping/cart','ShoppingCartController@show')->name('shoping.cart.show');

});

