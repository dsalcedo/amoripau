<?php

namespace App\Http\Controllers\Webapp;

use Illuminate\Http\Request;
use App\Models\Pureza;
use App\Http\Controllers\Controller;

class PurezasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Index()
    {
        $purezas = Pureza::all();
        return view('dashboard.purezas.index',compact('purezas'));
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
    public function Store(Request $request)
    {
        Pureza::create($request->all());
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
    public function Update(Request $request, $id)
    {
        $pureza = Pureza::find($id);
        $pureza->nombre = $request->nombre;
        $pureza->descripcion = $request->descripcion;
        $pureza->save();
        return redirect()->back()->with(['update'=>'Actualización  de datos exitosa']);
    }

    public function purezaWidgetEdit($pureza_id){
        $pureza = Pureza::find($pureza_id);
        return view('dashboard.purezas.edit_widget',compact('pureza'));
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
