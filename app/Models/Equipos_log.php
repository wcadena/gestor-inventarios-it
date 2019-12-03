<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Equipos_log extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['id_equipos', 'acciondb', 'modelo_equipo_id', 'orden_de_compra_id', 'custodio_id', 'estacione_id', 'area_id', 'check_list_id', 'num_cajas', 'sociedad', 'no_serie', 'codigo_barras', 'codigo_avianca', 'codigo_otro', 'descripcion', 'ip', 'estado', 'estatus', 'garantia', 'observaciones', 'imagen', 'codigo_contable', 'hp_warrantyLevel', 'hp_endDate', 'hp_displaySerialNumber', 'hp_modelNumber', 'hp_countryOfPurchase', 'hp_newProduct_seriesName', 'hp_newProduct_imageUrl', 'hp_warrantyResultRedirectUrl', 'id_users', 'empresa_procede1'];
}
