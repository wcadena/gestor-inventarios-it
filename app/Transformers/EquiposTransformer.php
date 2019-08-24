<?php

namespace App\Transformers;

use App\Equipos;
use League\Fractal\TransformerAbstract;

class EquiposTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Equipos $equipos)
    {
        return [
            'id'                 => (string) $equipos->id,
            'modelo_equipo_id'   => (string) $equipos->modelo_equipo_id,
            'orden_de_compra_id' => (string) $equipos->orden_de_compra_id,
            'custodio_id'        => (string) $equipos->custodio_id,
            'estacione_id'       => (string) $equipos->estacione_id,
            'area_id'            => (string) $equipos->area_id,
            'check_list_id'      => (string) $equipos->check_list_id,
            'imagen'             => (string) $equipos->imagen,
            'num_cajas'          => (string) $equipos->num_cajas,
            'sociedad'           => (string) $equipos->sociedad,

            'no_serie'       => (string) $equipos->no_serie,
            'codigo_barras'  => (string) $equipos->codigo_barras,
            'codigo_avianca' => (string) $equipos->codigo_avianca,
            'codigo_otro'    => (string) $equipos->codigo_otro,
            'descripcion'    => (string) $equipos->descripcion,

            'ip'            => (string) $equipos->ip,
            'estado'        => (string) $equipos->estado,
            'estatus'       => (string) $equipos->estatus,
            'garantia'      => (string) $equipos->garantia,
            'observaciones' => (string) $equipos->observaciones,

            'codigo_contable'        => (string) $equipos->codigo_contable,
            'hp_warrantyLevel'       => (string) $equipos->hp_warrantyLevel,
            'hp_endDate'             => (string) $equipos->hp_endDate,
            'hp_displaySerialNumber' => (string) $equipos->hp_displaySerialNumber,
            'hp_modelNumber'         => (string) $equipos->hp_modelNumber,

            'hp_countryOfPurchase'         => (string) $equipos->hp_countryOfPurchase,
            'hp_newProduct_seriesName'     => (string) $equipos->hp_newProduct_seriesName,
            'hp_newProduct_imageUrl'       => (string) $equipos->hp_newProduct_imageUrl,
            'hp_warrantyResultRedirectUrl' => (string) $equipos->hp_warrantyResultRedirectUrl,

            'fechaCreacion'      => (string) $equipos->created_at,
            'fechaActualizacion' => (string) $equipos->updated_at,
            'fechaEliminacion'   => isset($equipos->deleted_at) ? (string) $equipos->deleted_at : null,

            'links' => [
                [
                    'rel'  => 'custodios.puestos',
                    'href' => route('custodios.puestos.index', $equipos),
                ],
                [
                    'rel'  => 'equipos.checkList',
                    'href' => route('equipos.checkList.index', $equipos),
                ],
            ],
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'id'                           => 'id',
            'modelo_equipo_id'             => 'modelo_equipo_id',
            'orden_de_compra_id'           => 'orden_de_compra_id',
            'custodio_id'                  => 'custodio_id',
            'estacione_id'                 => 'estacione_id',
            'area_id'                      => 'area_id',
            'check_list_id'                => 'check_list_id',
            'imagen'                       => 'imagen',
            'num_cajas'                    => 'num_cajas',
            'sociedad'                     => 'sociedad',
            'no_serie'                     => 'no_serie',
            'codigo_barras'                => 'codigo_barras',
            'codigo_avianca'               => 'codigo_avianca',
            'codigo_otro'                  => 'codigo_otro',
            'descripcion'                  => 'descripcion',
            'ip'                           => 'ip',
            'estado'                       => 'estado',
            'estatus'                      => 'estatus',
            'garantia'                     => 'garantia',
            'observaciones'                => 'observaciones',
            'codigo_contable'              => 'codigo_contable',
            'hp_warrantyLevel'             => 'hp_warrantyLevel',
            'hp_endDate'                   => 'hp_endDate',
            'hp_displaySerialNumber'       => 'hp_displaySerialNumber',
            'hp_modelNumber'               => 'hp_modelNumber',
            'hp_countryOfPurchase'         => 'hp_countryOfPurchase',
            'hp_newProduct_seriesName'     => 'hp_newProduct_seriesName',
            'hp_newProduct_imageUrl'       => 'hp_newProduct_imageUrl',
            'hp_warrantyResultRedirectUrl' => 'hp_warrantyResultRedirectUrl',

            'fechaCreacion'      => 'created_at',
            'fechaActualizacion' => 'updated_at',
            'fechaEliminacion'   => 'deleted_at',
        ];

        return isset($attributes[$index]) ? $attributes[$index] : null;
    }

    public static function transformedAttribute($index)
    {
        $attributes = [
            'id'                           => 'id',
            'modelo_equipo_id'             => 'modelo_equipo_id',
            'orden_de_compra_id'           => 'orden_de_compra_id',
            'custodio_id'                  => 'custodio_id',
            'estacione_id'                 => 'estacione_id',
            'area_id'                      => 'area_id',
            'check_list_id'                => 'check_list_id',
            'imagen'                       => 'imagen',
            'num_cajas'                    => 'num_cajas',
            'sociedad'                     => 'sociedad',
            'no_serie'                     => 'no_serie',
            'codigo_barras'                => 'codigo_barras',
            'codigo_avianca'               => 'codigo_avianca',
            'codigo_otro'                  => 'codigo_otro',
            'descripcion'                  => 'descripcion',
            'ip'                           => 'ip',
            'estado'                       => 'estado',
            'estatus'                      => 'estatus',
            'garantia'                     => 'garantia',
            'observaciones'                => 'observaciones',
            'codigo_contable'              => 'codigo_contable',
            'hp_warrantyLevel'             => 'hp_warrantyLevel',
            'hp_endDate'                   => 'hp_endDate',
            'hp_displaySerialNumber'       => 'hp_displaySerialNumber',
            'hp_modelNumber'               => 'hp_modelNumber',
            'hp_countryOfPurchase'         => 'hp_countryOfPurchase',
            'hp_newProduct_seriesName'     => 'hp_newProduct_seriesName',
            'hp_newProduct_imageUrl'       => 'hp_newProduct_imageUrl',
            'hp_warrantyResultRedirectUrl' => 'hp_warrantyResultRedirectUrl',

            'created_at' => 'fechaCreacion',
            'updated_at' => 'fechaActualizacion',
            'deleted_at' => 'fechaEliminacion',
        ];

        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}
