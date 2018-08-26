<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\UsuarioRol;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuarios = [
            ['nombre'=>'Admin', 'email'=>'admin@amoripau.com','password'=> bcrypt('password'), 'activo' => true],
            ['nombre'=>'Empleado', 'email'=>'empleado@amoripau.com','password'=> bcrypt('password'),'activo' => true],
            ['nombre'=>'Cliente', 'email'=>'recepcion@amoripau.com','password'=> bcrypt('password'),'activo' => true],
        ];


        foreach ($usuarios as $usuario) {
            $exist = User::where('email', $usuario['email'])->first();

            if (is_null($exist)){
                User::create($usuario);
            }
        }


        for ($i=1;$i<4;$i++){
         $usuario_rol =  new UsuarioRol();
         $usuario_rol->usuario_id = $i;
         $usuario_rol->rol_id = $i;
         $usuario_rol->save();
        }

    }
}
