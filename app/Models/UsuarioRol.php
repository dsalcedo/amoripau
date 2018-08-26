<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsuarioRol extends Model
{
    protected $table= "usuarios_roles";

    protected $fillable = [
        'usuario_id',
        'rol_id',
    ];
}
