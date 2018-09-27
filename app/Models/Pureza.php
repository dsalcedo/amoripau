<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pureza extends Model
{
    protected $table= "purezas";

    protected $fillable = [
        'id',
        'nombre',
        'descripcion',
        'activo'
    ];

    public function getWidgetEditAttribute()
    {
        return route('pureza.widget.edit', $this->id);
    }
}
