<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Pureza;
use App\Models\Promocion;

class Producto extends Model
{
    protected $table= "productos";

    protected $fillable = [
        'nombre',
        'modelo',
        'cantidad',
        'precio',
        'purezas_id',
        'promocion_id',
        'tipo_producto_id',
    ];

    public function promocion()
    {
        return $this->hasOne(promocion::class, 'id', 'promocion_id');
    }
    public function pureza(){
        return $this->hasOne(pureza::class, 'id', 'purezas_id');
    }
    public function tipoProducto(){
        return $this->hasOne(tipoProducto::class, 'id', 'tipo_producto_id');
    }
    public function getWidgetEditAttribute()
    {
        return route('producto.widget.edit', $this->id);
    }
}
