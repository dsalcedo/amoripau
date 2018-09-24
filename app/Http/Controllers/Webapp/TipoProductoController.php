<?php

namespace App\Http\Controllers\Webapp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TipoProducto;
use App\Models\Producto;

class TipoProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipo_productos = TipoProducto::where('activo',true)->get();
        return view('dashboard.tipo_producto.index',compact('tipo_productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        TipoProducto::create($request->all());
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
        $tipo_producto = TipoProducto::find($id);
        $tipo_producto->nombre = $request->nombre;
        $tipo_producto->descripcion = $request->descripcion;
        $tipo_producto->save();
        return redirect()->back()->with(['update'=>'Actualización  de datos exitosa']);
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

    public function tipoProductoWidgetEdit($tipo_producto_id)
    {
        $tipo_producto = TipoProducto::find($tipo_producto_id);
        return view('dashboard.tipo_producto.edit_widget',compact('tipo_producto'));
    }

    public function eliminar($id)
    {
        $tipo_producto = TipoProducto::find($id);
        $productos = Producto::where('tipo_producto_id',$tipo_producto->id)->count();
        if ($productos > 0 ){
            return redirect()->back()->with(['Error'=>'La pureza no fue eliminada']);
        }else{
            $tipo_producto->activo = false;
            $tipo_producto->save();
            return redirect()->back()->with(['Eliminado'=>'La pureza fue eliminada']);
        }

    }

}
