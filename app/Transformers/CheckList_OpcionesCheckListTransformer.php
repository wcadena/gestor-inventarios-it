<?php

namespace App\Transformers;

use App\CheckList_OpcionesCheckList;
use League\Fractal\TransformerAbstract;

class CheckList_OpcionesCheckListTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(CheckList_OpcionesCheckList $checkList_OpcionesCheckList)
    {
        return [
            'id'      => (int) $checkList_OpcionesCheckList->id,
            'valor1'  => (string) $checkList_OpcionesCheckList->valor1,
            'valor2'  => (string) $checkList_OpcionesCheckList->valor2,
            'valor3'  => (string) $checkList_OpcionesCheckList->valor3,
            'valor4'  => (string) $checkList_OpcionesCheckList->valor4,
            'valor5'  => (string) $checkList_OpcionesCheckList->valor5,
            'valor6'  => (string) $checkList_OpcionesCheckList->valor6,
            'valor7'  => (string) $checkList_OpcionesCheckList->valor7,
            'valor8'  => (string) $checkList_OpcionesCheckList->valor8,
            'valor9'  => (string) $checkList_OpcionesCheckList->valor9,
            'valor10' => (string) $checkList_OpcionesCheckList->valor10,

            'tipo'     => (string) $checkList_OpcionesCheckList->tipo,
            'atributo' => (string) $checkList_OpcionesCheckList->atributo,

            'fechaCreacion'      => (string) $checkList_OpcionesCheckList->created_at,
            'fechaActualizacion' => (string) $checkList_OpcionesCheckList->updated_at,
            'fechaEliminacion'   => isset($checkList_OpcionesCheckList->deleted_at) ? (string) $checkList_OpcionesCheckList->deleted_at : null,
            'links'              => [
                [
                    'rel'  => 'self',
                    'href' => route('checkList.show', $checkList_OpcionesCheckList->check_list_id),
                ],
                /*[
                    'rel' => 'self',
                    'href' => route('checkList.show', $checkList_OpcionesCheckList->opciones_check_list_id),
                ],*/

            ],
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'id'       => 'id',
            'valor1'   => 'valor1',
            'valor2'   => 'valor2',
            'valor3'   => 'valor3',
            'valor4'   => 'valor4',
            'valor5'   => 'valor5',
            'valor6'   => 'valor6',
            'valor7'   => 'valor7',
            'valor8'   => 'valor8',
            'valor9'   => 'valor9',
            'valor10'  => 'valor10',
            'tipo'     => 'tipo',
            'atributo' => 'atributo',

            'fechaCreacion'      => 'created_at',
            'fechaActualizacion' => 'updated_at',
            'fechaEliminacion'   => 'deleted_at',
        ];

        return isset($attributes[$index]) ? $attributes[$index] : null;
    }

    public static function transformedAttribute($index)
    {
        $attributes = [
            'id'       => 'id',
            'valor1'   => 'valor1',
            'valor2'   => 'valor2',
            'valor3'   => 'valor3',
            'valor4'   => 'valor4',
            'valor5'   => 'valor5',
            'valor6'   => 'valor6',
            'valor7'   => 'valor7',
            'valor8'   => 'valor8',
            'valor9'   => 'valor9',
            'valor10'  => 'valor10',
            'tipo'     => 'tipo',
            'atributo' => 'atributo',

            'fechaCreacion'      => 'created_at',
            'fechaActualizacion' => 'updated_at',
            'fechaEliminacion'   => 'deleted_at',
        ];

        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}
