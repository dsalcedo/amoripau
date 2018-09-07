<?php
Route::group(['namespace'=>'Webapp'], function($r){
    $r->get('/inicio','InicioController@index')->name('inicio');

    $r->get('/empleados','UsuariosController@empleadosIndex')->name('empleados.index');
    $r->post('/empleados/store','UsuariosController@empleadosStore')->name('empleados.store');
    $r->get('/empleado/widget/edit/{empleado_id}','UsuariosController@empleadoWidgetEdit')->name('empleado.widget.edit');
    $r->put('/empleado/update/{empleado_id}','UsuariosController@empleadoUpdate')->name('empleado.update');


    $r->get('/tipo/producto','TipoProductoController@Index')->name('tipo.producto.index');
    $r->post('/tipo/producto/store','TipoProductoController@store')->name('tipo.producto.store');
    $r->get('/tipo/producto/widget/edit/{tipo_producto_id}','TipoProductoController@tipoProductoWidgetEdit')->name('tipo.producto.widget.edit');
    $r->put('/tipo/producto/update/{tipo_producto_id}','TipoProductoController@update')->name('tipo.producto.update');

    $r->get('/productos','ProductosController@index')->name('productos.index');

    $r->get('/pureza','PurezasController@index')->name('purezas.index');
    $r->post('pureza/store','PurezasController@store')->name('purezas.store');
    $r->get('/pureza/widget/edit/{pureza_id}','PurezasController@purezaWidgetEdit')->name('pureza.widget.edit');
    $r->put('/pureza/update/{pureza_id}','PurezasController@Update')->name('pureza.update');

    $r->get('/promocion','PromocionController@index')->name('promocion.index');
    $r->post('promocion/store','PromocionController@store')->name('promocion.store');
    $r->get('/promocion/widget/edit/{promocion_id}','PromocionController@promocionWidgetEdit')->name('promocion.widget.edit');
    $r->put('/promocion/update/{promocion_id}','PromocionController@Update')->name('promocion.update');

});
