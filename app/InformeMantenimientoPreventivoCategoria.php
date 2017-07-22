<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InformeMantenimientoPreventivoCategoria extends Model
{

    use SoftDeletes;
    protected $table = 'informe_manto_prev_cates';
    protected $dates = ['deleted_at'];
    protected $fillable = ['id','categoria'];

}
