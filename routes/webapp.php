<?php
Route::group(['namespace'=>'Webapp'], function($r){
    $r->get('/inicio','InicioController@index')->name('inicio');

    $r->get('/empleados','UsuariosController@empleadosIndex')->name('empleados.index');
    $r->post('/empleados/store','UsuariosController@empleadosStore')->name('empleados.store');
    $r->get('/empleado/widget/edit/{empleado_id}','UsuariosController@empleadoWidgetEdit')->name('empleado.widget.edit');
    $r->put('/empleado/update/{empleado_id}','UsuariosController@empleadoUpdate')->name('empleado.update');
});
