<?php

namespace App\Models;

use App\Transformers\EmpresaTransformer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Empresa extends Model
{
    use SoftDeletes;

    public $transformer = EmpresaTransformer::class;
    protected $dates = ['deleted_at'];

    protected $primaryKey = 'empresa';
    public $incrementing = false;

    protected $fillable = ['empresa', 'formula_codigo'];
}
