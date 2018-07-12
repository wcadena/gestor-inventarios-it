<?php

namespace App\Transformers;

use App\Ubicacion;
use League\Fractal\TransformerAbstract;

class UbicacionTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Ubicacion $ubicacion)
    {
        return [
            'edificio'           => (string) $ubicacion->edificio,
            'piso'               => (string) $ubicacion->piso,
            'imagen'             => env('APP_URL').'/img/perfil/'.$ubicacion->imagen,
            'fechaCreacion'      => (string) $ubicacion->created_at,
            'fechaActualizacion' => (string) $ubicacion->updated_at,
            'fechaEliminacion'   => isset($ubicacion->deleted_at) ? (string) $ubicacion->deleted_at : null,
            'links'              => [
                [
                    'rel'  => 'puestos.custodios',
                    'href' => route('puestos.custodios.index', $ubicacion),
                ],
            ],
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'edificio'           => 'edificio',
            'piso'               => 'piso',
            'imagen'             => 'imagen',
            'fechaCreacion'      => 'created_at',
            'fechaActualizacion' => 'updated_at',
            'fechaEliminacion'   => 'deleted_at',
        ];

        return isset($attributes[$index]) ? $attributes[$index] : null;
    }

    public static function transformedAttribute($index)
    {
        $attributes = [
            'edificio'   => 'edificio',
            'piso'       => 'piso',
            'imagen'     => 'imagen',
            'created_at' => 'fechaCreacion',
            'updated_at' => 'fechaActualizacion',
            'deleted_at' => 'fechaEliminacion',
        ];

        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}
