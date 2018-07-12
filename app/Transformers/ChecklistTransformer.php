<?php

namespace App\Transformers;

use App\CheckList;
use League\Fractal\TransformerAbstract;

class ChecklistTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(CheckList $checklist)
    {
        return [
            'id'                 => (int) $checklist->id,
            'id_check_lists'     => (string) $checklist->id_check_lists,
            'unik_check_lists'   => (string) $checklist->unik_check_lists,
            'fechaCreacion'      => (string) $checklist->created_at,
            'fechaActualizacion' => (string) $checklist->updated_at,
            'fechaEliminacion'   => isset($checklist->deleted_at) ? (string) $checklist->deleted_at : null,
            'links'              => [
                [
                    'rel'  => 'self',
                    'href' => route('users.show', $checklist->user_id),
                ],
                [
                    'rel'  => 'self',
                    'href' => action('api\AreasController@show', ['id' => $checklist->area_id]),
                ],
                [
                    'rel'  => 'self',
                    'href' => action('api\EquiposController@show', ['id' => $checklist->equiposxm['id']]),

                ],
            ],
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'id'                 => 'id',
            'id_check_lists'     => 'id_check_lists',
            'unik_check_lists'   => 'unik_check_lists',
            'fechaCreacion'      => 'created_at',
            'fechaActualizacion' => 'updated_at',
            'fechaEliminacion'   => 'deleted_at',
        ];

        return isset($attributes[$index]) ? $attributes[$index] : null;
    }

    public static function transformedAttribute($index)
    {
        $attributes = [
            'id'                 => 'id',
            'id_check_lists'     => 'id_check_lists',
            'unik_check_lists'   => 'unik_check_lists',
            'fechaCreacion'      => 'created_at',
            'fechaActualizacion' => 'updated_at',
            'fechaEliminacion'   => 'deleted_at',
        ];

        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}
