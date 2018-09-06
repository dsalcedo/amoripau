<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoProducto extends Model
{
    protected $table = 'tipo_productos';

    protected $fillable = [
        'nombre',
        'descripcion',
    ];

    public function getWidgetEditAttribute()
    {
        return route('tipo.producto.widget.edit', $this->id);
    }

}
