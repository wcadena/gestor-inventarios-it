<?php

namespace App;

use App\Scopes\EmpresaTScope;
use Illuminate\Database\Eloquent\Model;

class Estaciones extends Model
{
    protected $dates = ['deleted_at'];
    protected $fillable = ['estacion','empresa','nombre_largo','pais'];

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new EmpresaTScope());
    }

    public function empresaxc()
    {
        return $this->hasOne('App\Empresa', 'empresa', 'empresa');
    }
    
}
