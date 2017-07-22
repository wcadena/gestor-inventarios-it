<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InformeMantenimientoPreventivo extends Model
{
    use SoftDeletes;
    protected $table = 'informe_manto_prevs';
    protected $dates = ['deleted_at'];
    protected $fillable = ['id','custodio_id','area_id','no_orden','fecha_solicitud','fecha_ejecucion','hora_inicio','hora_fin','informe_manto_prev_cate_id','requerimiento','solucion','resolucion'];
    /*
     * estado	enum('BUENO', 'MALO', 'NUEVO')
     * estatus	enum('VIGENTE', 'BODEGA', 'BAJA')
     * garantia	enum('SI', 'NO')
     * */

    public function areaxc()
    {
        return $this->hasOne('App\Areas', 'id', 'area_id');
    }

    public function custodioxc()
    {
        return $this->hasOne('App\Custodios', 'id', 'custodio_id');
    }


    public function informe_manto_prev_catexc()
    {
        return $this->hasOne('App\User', 'id', 'informe_manto_prev_cate_id');
    }

////////////////////////////////////////////////////////////////////
    public function modelo_equipoxc()
    {
        return $this->hasOne('App\ModeloEquipo', 'id', 'modelo_equipo_id');
    }



}
