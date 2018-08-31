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

    public function usuario()
    {
        return $this->hasOne(User::class,'id','usuario_id');
    }

    public function rol()
    {
        return $this->hasOne(Rol::class, 'id', 'rol_id');
    }
}
