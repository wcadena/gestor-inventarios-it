<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estaciones extends Model
{
    protected $dates = ['deleted_at'];
    protected $fillable = ['estacion'];

    
}
