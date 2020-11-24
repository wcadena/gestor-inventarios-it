<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrdenDeCompra extends Model
{
    //
    use SoftDeletes;
    protected $fillable = ['ordenCompra', 'fecha_compra'];
}
