<?php

use Illuminate\Database\Seeder;
use App\Models\Rol;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $roles = [
            ['clave' => 'administrador', 'nombre' => 'administrador'],
            ['clave' => 'empleado', 'nombre' => 'empleado'],
            ['clave' => 'cliente', 'nombre' => 'cliente'],
        ];

        foreach ($roles as $rol){
            Rol::create($rol);
        }

    }
}
