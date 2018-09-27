<?php

namespace App\Http\Controllers\Webapp;

use App\Models\ProductoImagen;
use App\Models\TipoProducto;
use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Pureza;
use App\Models\Promocion;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Image;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::where('activo',true)->get();
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

        $ruta = public_path().'/img/';
        // recogida del form
        $path = $request->file('imagen');
        // crear instancia de imagen
        $imagen = Image::make($path);
        // generar un nombre aleatorio para la imagen
        $random = Str::random();
        $temp_name = $random.'.'. $path->getClientOriginalExtension();
        $imagen->save($ruta . $temp_name, 100);


        $producto_imagen = new ProductoImagen;
        $producto_imagen->producto_id = $producto->id;
        $producto_imagen->ruta = $temp_name;
        $producto_imagen->save();

        //return redirect('personajes/create');
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
        $producto->costo = $request->costo;
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
        $producto_imagen = new ProductoImagen;
        $ruta = public_path().'/img/';
        $path = $request->file('imagen');
        $imagen = Image::make($path);
        $producto_imagen->producto_id = $request->producto_id;
        $random = Str::random();
        $temp_name = $random.'.'. $path->getClientOriginalExtension();
        $imagen->save($ruta . $temp_name, 100);
        $producto_imagen->ruta = $temp_name;

        $producto_imagen->save();
        return redirect()->back()->with(['registro'=>'Registro Exitoso']);
    }

    public function eliminar($id){

        $producto = Producto::find($id);
        $producto->activo = false;
        $producto->save();
        return redirect()->back()->with(['Eliminado'=>'La promoción fue eliminada']);
    }

}
