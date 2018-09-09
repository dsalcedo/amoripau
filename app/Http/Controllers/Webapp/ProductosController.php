<?php

namespace App\Http\Controllers\Webapp;

use App\Models\TipoProducto;
use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Pureza;
use App\Models\Promocion;
use App\Http\Controllers\Controller;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::get();
        $purezas = Pureza::all()->pluck('nombre','id');
        $promocion =Promocion::all()->pluck('nombre','id');
        $tipo_producto = TipoProducto::all()->pluck('nombre','id');
        return view('dashboard.producto.index',compact('productos','purezas','promocion','tipo_producto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Producto::create($request->all());

        return redirect()->back()->with(['registro'=>'Registro Exitoso']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $producto = Producto::find($id);
        $producto->nombre = $request->nombre;
        $producto->clave = $request->clave;
        $producto->modelo = $request->modelo;
        $producto->cantidad = $request->cantidad;
        $producto->precio = $request->precio;
        $producto->save();
        return redirect()->back()->with(['update'=>'Actualización  de datos exitosa']);
    }
    public function productoWidgetEdit($producto_id){
        $producto = Producto::find($producto_id);
        return view('dashboard.producto.edit_widget',compact('producto'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
