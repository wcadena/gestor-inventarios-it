<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Equipos_log extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['id_equipos','acciondb','modelo_equipo_id','orden_de_compra_id','custodio_id','estacione_id','area_id','check_list_id','num_cajas','sociedad','no_serie','codigo_barras','codigo_avianca','codigo_otro','descripcion','ip','estado','estatus','garantia','observaciones'];

}
