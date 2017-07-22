<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModeloEquipo extends Model
{
    //
    protected $fillable = ['modelo','fabricante','garantia_anios','tipo_equipo'];
    public function tipos() {
        return $this->hasMany('DESKTOP','LAPTOP','CPU','CLON','IMPRESORA LASER','IMPRESORA MATRICIAL');
    }
    public function equiposhm()
    {
        return $this->hasMany('App\Equipos', 'modelo_equipo_id', 'id');
    }
}
