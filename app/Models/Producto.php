<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table= "productos";

    protected $fillable = [
        'id',
        'nombre',
        'clave',
        'modelo',
        'precio',
    ];

    /*public function promocion()
    {
        return $this->hasOne(User::class,'id','usuario_id');
    }*/

}
