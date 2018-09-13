<?php

namespace App\Http\Controllers\Webapp;

use App\Models\ProductoImagen;
use App\Models\TipoProducto;
use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Pureza;
use App\Models\Promocion;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

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
        $producto = Producto::create($request->all());
        $producto_imagen = new ProductoImagen();
        $path = $request->file('imagen')->store('/public/uploads/productos');
        $producto_imagen->producto_id = $producto->id;
        $producto_imagen->ruta = substr($path, 6);
        $producto_imagen->save();
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
        $producto = Producto::find($id);
        $purezas = Pureza::all()->pluck('nombre','id');
        $promociones = Promocion::all()->pluck('nombre','id');
        $tipo_productos = TipoProducto::all()->pluck('nombre','id');
        return view('dashboard.producto.edit',compact('producto','purezas','promociones','tipo_productos'));
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
        $producto->modelo = $request->modelo;
        $producto->cantidad = $request->cantidad;
        $producto->precio = $request->precio;
        $producto->purezas_id = $request->purezas_id;
        $producto->promocion_id = $request->promocion_id;
        $producto->tipo_producto_id = $request->tipo_producto_id;
        $producto->save();
        return redirect()->back()->with(['update'=>'Actualización  de datos exitosa']);
    }
    public function productoWidgetEdit($producto_id)
    {
        $producto = Producto::find($producto_id);
        $purezas = Pureza::all()->pluck('nombre','id');
        $promociones = Promocion::all()->pluck('nombre','id');
        $tipo_productos = TipoProducto::all()->pluck('nombre','id');
        return view('dashboard.producto.edit_widget',compact('producto','purezas','promociones','tipo_productos'));
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

    public function imageStore(Request $request)
    {
        $producto_imagen = new ProductoImagen();
        $path = $request->file('imagen')->store('/public/uploads/productos');
        $producto_imagen->producto_id = $request->producto_id;
        $producto_imagen->ruta = substr($path, 6);
        $producto_imagen->save();
        return redirect()->back()->with(['registro'=>'Registro Exitoso']);
    }

}
