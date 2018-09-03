<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\UsuarioRol;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'usuarios';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'p_paterno', 'p_materno', 'fecha_nacimiento','email', 'password', 'activo'
];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function usuarioRol()
    {
        return $this->hasOne(UsuarioRol::class, 'usuario_id', 'id');
    }


    public function getWidgetEditAttribute()
    {
     return route('empleado.widget.edit', $this->id);
    }

}
