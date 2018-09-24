<?php

namespace App\Http\Controllers\Webapp;

use Illuminate\Http\Request;
use App\Models\Promocion;
use App\Http\Controllers\Controller;

class PromocionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promocion = Promocion::where('activo',true)->get();
        return view('dashboard.promocion.index',compact('promocion'));
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
        Promocion::create($request->all());
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
        $promocion = Promocion::find($id);
        $promocion->nombre = $request->nombre;
        $promocion->descripcion = $request->descripcion;
        $promocion->multiplicando = $request->multiplicando;
        $promocion->multiplicador = $request->multiplicador;
        $promocion->save();
        return redirect()->back()->with(['update'=>'Actualización  de datos exitosa']);
    }

    public function promocionWidgetEdit($promocion_id){
        $promocion = Promocion::find($promocion_id);
        return view('dashboard.promocion.edit_widget',compact('promocion'));
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

    public function eliminar($id){

        $promocion = Promocion::find($id);
        $promocion->activo = false;
        $promocion->save();
        return redirect()->back()->with(['Eliminado'=>'La promoción fue eliminada']);
    }

}
