<?php

namespace App\Transformers;

use App\Areas;
use App\Custodios;
use League\Fractal\TransformerAbstract;

class AreasTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Areas $areas)
    {
        return [
            'id'                 => (string) $areas->id,
            'area'               => (string) $areas->area,
            'empresa'            => (string) $areas->empresa,
            'fechaCreacion'      => (string) $areas->created_at,
            'fechaActualizacion' => (string) $areas->updated_at,
            'fechaEliminacion'   => isset($areas->deleted_at) ? (string) $areas->deleted_at : null,
            /*'links' => [
                [
                    'rel' => 'custodios.puestos',
                    'href' => route('custodios.puestos.index', $areas),
                ],
            ],*/
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'id'                 => 'id',
            'area'               => 'area',
            'empresa'            => 'empresa',
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
            'area'       => 'area',
            'empresa'    => 'empresa',
            'created_at' => 'fechaCreacion',
            'updated_at' => 'fechaActualizacion',
            'deleted_at' => 'fechaEliminacion',
        ];

        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}
