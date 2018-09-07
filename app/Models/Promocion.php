<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promocion extends Model
{
    protected $table= "promocion";

    protected $fillable = [
        'id',
        'nombre',
        'descripcion',
        'multiplicando',
        'multiplicador'
    ];

    public function getWidgetEditAttribute()
    {
        return route('promocion.widget.edit', $this->id);
    }
}
