<?php

namespace App\Transformers;

use App\Empresa;
use League\Fractal\TransformerAbstract;

class EmpresaTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Empresa $empresa)
    {
        return [
            'empresa'            => (string) $empresa->empresa,
            'fechaCreacion'      => (string) $empresa->created_at,
            'fechaActualizacion' => (string) $empresa->updated_at,
            'fechaEliminacion'   => isset($empresa->deleted_at) ? (string) $empresa->deleted_at : null,

        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
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
            'empresa'    => 'empresa',
            'created_at' => 'fechaCreacion',
            'updated_at' => 'fechaActualizacion',
            'deleted_at' => 'fechaEliminacion',
        ];

        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}
