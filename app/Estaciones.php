<?php

namespace App;

use App\Scopes\EmpresaTScope;
use Illuminate\Database\Eloquent\Model;

class Estaciones extends Model
{
    protected $dates = ['deleted_at'];
    protected $fillable = ['estacion'];

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new EmpresaTScope());
    }
    
}
