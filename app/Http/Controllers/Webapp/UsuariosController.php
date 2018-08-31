<?php

namespace App\Http\Controllers\Webapp;

use App\Models\User;
use App\Models\UsuarioRol;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    public function empleadosIndex()
    {
        $empleados = User::whereHas('usuarioRol', function($sub){return $sub->where('rol_id',2);})->get();
        return view('dashboard.usuarios.empleados.index', compact('empleados'));
    }

    public function empleadosStore(Request $request)
    {
        $empleado= new User();
        $empleado->nombre = $request->nombre;
        $empleado->email = $request->email;
        $empleado->password = bcrypt($request->password);
        $empleado->activo = true;
        $empleado->save();

        $empleado_rol = new UsuarioRol();
        $empleado_rol->usuario_id = $empleado->id;
        $empleado_rol->rol_id = 2;
        $empleado_rol->save();

        return redirect()->back()->with(['registro'=>'Registro Exitoso']);
    }

    public function empleadoWidgetEdit($empleado_id)
    {
        $empleado = User::find($empleado_id);
        return view('dashboard.usuarios.empleados.edit_widget',compact('empleado'));
    }

    public function empleadoUpdate(Request $request, $empleado_id)
    {
        $empleado = User::find($empleado_id);
        $empleado->fill($request->all());
        $empleado->save();
        return redirect()->back()->with(['update'=>'Actualización  de datos exitosa']);
    }


}
