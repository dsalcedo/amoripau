<?php

namespace App\Http\Controllers\API;

use App\Models\Producto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class ShoppingCartController extends Controller
{

   /* public function show()
    {
        return Cookie::get('carrito2');
    }

    public function add(Request $request){
        $producto = Producto::find($request->producto_id);
        $carrito = Cookie::get('carrito2');

        if ($carrito == null){
            $carrito[0] = $producto;
            $carrito[1] = $producto;
            $carrito[2] = $producto;
            $carrito[3] = $producto;
        }else{
            $carrito[0] = $producto;
        }

        $carrito2 =json_encode($carrito);
        return Cookie('carrito2', $carrito2 , 60);
    }


    private function createCarrito(){
        $carrito = [];

        Cookie('carrito',$carrito,120);

    }

   */
   public function __construct()
   {
       if (Session::has('cart')){
           Session::get('cart');
       } else{
           Session::put('cart',array());
       }
   }

   public function show()
   {
       return  Session::get('cart');
   }

   public function add(Request $request)
   {
       $producto = Producto::find($request->producto_id);
       $cantidad = $request->qty;
       $producto->qty = $cantidad;
       $cart = Session::get('cart');
       array_push($cart,$producto);
       Session::put('cart',$cart);
       return  response()->json(Session::get('cart'));
   }

   public function delete(Request $request)
   {
    $cart = Session::get('cart');
    unset($cart[$request->llave]);
    Session::put('cart',$cart);

   }

   public function trash()
   {
       Session::forget('cart');
   }

}
