<?php

namespace App\Transformers;

use App\PuestoCustodios;
use League\Fractal\TransformerAbstract;

class PuestoCustodiosTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(PuestoCustodios $puesto)
    {
        return [
            'fecha_inicio'       => (string) $puesto->fecha_inicio,
            'fecha_fin'          => (string) $puesto->fecha_fin,
            'horas_trabajadas'   => (string) $puesto->horas_trabajadas,
            'fechaCreacion'      => (string) $puesto->created_at,
            'fechaActualizacion' => (string) $puesto->updated_at,
            'fechaEliminacion'   => isset($puesto->deleted_at) ? (string) $puesto->deleted_at : null,
            'links'              => [
                [
                    'rel'  => 'custodios',
                    'href' => route('custodios.show', $puesto->custodio_id),
                ],
                [
                    'rel'  => 'puestos',
                    'href' => route('puestos.show', $puesto->puesto_id),
                ],
            ],
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'fecha_inicio'       => 'fecha_inicio',
            'fecha_fin'          => 'fecha_fin',
            'horas_trabajadas'   => 'horas_trabajadas',
            'fechaCreacion'      => 'created_at',
            'fechaActualizacion' => 'updated_at',
            'fechaEliminacion'   => 'deleted_at',
        ];

        return isset($attributes[$index]) ? $attributes[$index] : null;
    }

    public static function transformedAttribute($index)
    {
        $attributes = [
            'fecha_inicio'     => 'fecha_inicio',
            'fecha_fin'        => 'fecha_fin',
            'horas_trabajadas' => 'horas_trabajadas',
            'created_at'       => 'fechaCreacion',
            'updated_at'       => 'fechaActualizacion',
            'deleted_at'       => 'fechaEliminacion',
        ];

        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}
