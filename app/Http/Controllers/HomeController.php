<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoProducto;
use App\Models\Producto;
use App\Models\Pureza;
use App\Models\Promocion;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function principal()
    {
        $productos = Producto::get();
        $purezas = Pureza::all()->pluck('nombre','id');
        $promocion =Promocion::all()->pluck('nombre','id');
        $tipo_producto = TipoProducto::all()->pluck('nombre','id');
        return view('welcome',compact('productos','purezas','promocion','tipo_producto'));
    }
}
