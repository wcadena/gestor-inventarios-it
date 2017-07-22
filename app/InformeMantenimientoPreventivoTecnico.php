<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InformeMantenimientoPreventivoTecnico extends Model
{
    use SoftDeletes;
    protected $table = 'informe_manto_prev_tecs';
    protected $dates = ['deleted_at'];
    protected $fillable = ['user_id','informe_manto_prev_id'];


    public function userxc()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
    public function InformeMantenimientoPreventivoxc()
    {
        return $this->hasOne('App\InformeMantenimientoPreventivo', 'id', 'informe_manto_prev_id');
    }
}
