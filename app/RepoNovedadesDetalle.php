<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RepoNovedadesDetalle extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['repo_novedades_id','id_equipos','modelo_equipo_id','orden_de_compra_id','custodio_id','estacione_id','area_id','check_list_id','num_cajas','sociedad','no_serie','codigo_barras','codigo_avianca','codigo_otro','descripcion','ip','estado','estatus','garantia','observaciones'];

    public function RepoNovedadesDetallexc()
    {
        return $this->hasOne('App\RepoNovedades', 'id', 'repo_novedades_id');
    }

    ////////////////////////////////////////////////////////////////////
    public function modelo_equipoxc()
    {
        return $this->hasOne('App\ModeloEquipo', 'id', 'modelo_equipo_id');
    }
    public function orden_de_compraxc()
    {
        return $this->hasOne('App\OrdenDeCompra', 'id', 'orden_de_compra_id');
    }
    public function custodioxc()
    {
        return $this->hasOne('App\Custodios', 'id', 'custodio_id');
    }
    public function estacionxc()
    {
        return $this->hasOne('App\Estaciones', 'id', 'estacione_id');
    }
    public function areaxc()
    {
        return $this->hasOne('App\Areas', 'id', 'area_id');
    }
    public function check_listxc()
    {
        return $this->hasOne('App\CheckList', 'id', 'check_list_id');
    }
    public function equipos_logxc()
    {
        return $this->hasOne('App\Equipos_log', 'id', 'id_equipos');
    }


}
