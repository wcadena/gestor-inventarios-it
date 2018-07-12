<?php
/**
 * Created by PhpStorm.
 * User: wcadena
 * Date: 6/9/2017
 * Time: 7:28.
 */

namespace App\Transformers;

use App\Busqueda;

class BusquedaTransformer
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Busqueda $busqueda)
    {
        $linkrel = '';
        $linkhref = '';

        switch (((string) $busqueda->instancia_tabla).toUpper()) {
            case 'CUSTODIOs':
                $linkrel = 'Custodio';
                $linkhref = 'custodio.show';
                break;
            case 'EQUIPOS':
                $linkrel = 'Equipo';
                $linkhref = 'equipos.show';
                break;
        }

        return [
            'id'                 => (string) $busqueda->instancia_id,
            'instancia'          => (string) $busqueda->instancia_tabla,
            'dato'               => (string) $busqueda->dato,
            'fechaCreacion'      => (string) $busqueda->created_at,
            'fechaActualizacion' => (string) $busqueda->updated_at,
            'fechaEliminacion'   => isset($busqueda->deleted_at) ? (string) $busqueda->deleted_at : null,
            'links'              => [
                [
                    'rel'  => $linkrel,
                    'href' => route($linkhref, $busqueda->instancia_id),
                ],
            ],
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'id'                 => 'id',
            'instancia'          => 'instancia',
            'dato'               => 'dato',
            'fechaCreacion'      => 'created_at',
            'fechaActualizacion' => 'updated_at',
            'fechaEliminacion'   => 'deleted_at',
        ];

        return isset($attributes[$index]) ? $attributes[$index] : null;
    }

    public static function transformedAttribute($index)
    {
        $attributes = [
            'id'         => 'id',
            'instancia'  => 'instancia',
            'dato'       => 'dato',
            'created_at' => 'fechaCreacion',
            'updated_at' => 'fechaActualizacion',
            'deleted_at' => 'fechaEliminacion',
        ];

        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}
