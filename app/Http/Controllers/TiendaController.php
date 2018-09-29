<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Pureza;
use App\Models\Promocion;
use App\Models\TipoProducto;
use Illuminate\Support\Facades\Cookie;

class TiendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producto = Producto::all();
        $purezas = Pureza::all()->pluck('nombre','id');
        $promociones = Promocion::all()->pluck('nombre','id');
        $tipo_productos = TipoProducto::all()->pluck('nombre','id');
        $carrito = Cookie::get('carrito');
        return view('welcome',compact('producto','purezas','promociones','tipo_productos','carrito'));

    }


    public function view($id)
    {
        $producto = Producto::find($id);
        $pureza = new pureza;
        $promocion = new promocion;
        $tipo_producto = new tipoProducto;
        return view('detalle',compact('producto','pureza','promocion','tipo_producto'));
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
        //
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
        //
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
