<?php

namespace App\Transformers;

use App\Puesto;
use League\Fractal\TransformerAbstract;

class PuestoTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Puesto $puesto)
    {
        return [
            'codigo'             => (string) $puesto->codigo,
            'detalle'            => (string) $puesto->detalle,
            'x'                  => (int) $puesto->x,
            'y'                  => (int) $puesto->y,
            'ocupado'            => ($puesto->estado == 'OCUPADO'),
            'reservado'          => ($puesto->estado == 'RESERVADO'),
            'libre'              => ($puesto->estado == 'LIBRE'),
            'fechaCreacion'      => (string) $puesto->created_at,
            'fechaActualizacion' => (string) $puesto->updated_at,
            'fechaEliminacion'   => isset($puesto->deleted_at) ? (string) $puesto->deleted_at : null,
            'links'              => [
                [
                    'rel'  => 'puestos.custodios',
                    'href' => route('puestos.custodios.index', $puesto),
                ],
                [
                    'rel'  => 'ubicacions',
                    'href' => route('ubicacions.show', $puesto->ubicacions['id']),
                ],
            ],
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'codigo'             => 'codigo',
            'detalle'            => 'detalle',
            'x'                  => 'x',
            'y'                  => 'y',
            'estado'             => 'estado',
            'fechaCreacion'      => 'created_at',
            'fechaActualizacion' => 'updated_at',
            'fechaEliminacion'   => 'deleted_at',
        ];

        return isset($attributes[$index]) ? $attributes[$index] : null;
    }

    public static function transformedAttribute($index)
    {
        $attributes = [
            'codigo'     => 'codigo',
            'detalle'    => 'detalle',
            'x'          => 'x',
            'y'          => 'y',
            'estado'     => 'estado',
            'created_at' => 'fechaCreacion',
            'updated_at' => 'fechaActualizacion',
            'deleted_at' => 'fechaEliminacion',
        ];

        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}
