<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;

class InformeMantenimientoPreventivoTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(\App\InformeMantenimientoPreventivo $info)
    {
        return [
            'id'                         => (int) $info->id,
            'custodio_id'                => (string) $info->custodio_id,
            'area_id'                    => (string) $info->area_id,
            'no_orden'                   => (string) $info->no_orden,
            'fecha_solicitud'            => (string) $info->fecha_solicitud,
            'fecha_ejecucion'            => (string) $info->fecha_ejecucion,
            'hora_inicio'                => (string) $info->hora_inicio,
            'hora_fin'                   => (string) $info->hora_fin,
            'informe_manto_prev_cate_id' => (int) $info->informe_manto_prev_cate_id,
            'requerimiento'              => (string) $info->requerimiento,
            'solucion'                   => (string) $info->solucion,
            'resolucion'                 => (string) $info->resolucion,

            'fechaCreacion'      => (string) $info->created_at,
            'fechaActualizacion' => (string) $info->updated_at,
            'fechaEliminacion'   => isset($info->deleted_at) ? (string) $info->deleted_at : null,
            'links'              => [
                [
                    'rel'  => 'self',
                    'href' => route('info.show', $info->id),
                ],
            ],
        ];
    }
}
