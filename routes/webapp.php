<?php
Route::group(['namespace'=>'Webapp'], function($r){
    $r->get('/inicio','InicioController@index')->name('inicio');
});
