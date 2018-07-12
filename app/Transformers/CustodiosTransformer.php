<?php

namespace App\Transformers;

use App\Custodios;
use League\Fractal\TransformerAbstract;

class CustodiosTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Custodios $custodios)
    {
        return [
            'id'                      => (string) $custodios->id,
            'nombre_responsable'      => (string) $custodios->nombre_responsable,
            'pais'                    => (string) $custodios->pais,
            'ciudad'                  => (string) $custodios->ciudad,
            'direccion'               => (string) $custodios->direccion,
            'documentoIdentificacion' => (string) $custodios->documentoIdentificacion,
            'cargo'                   => (string) $custodios->cargo,
            'compania'                => (string) $custodios->compania,
            'telefono'                => (string) $custodios->telefono,
            'estado'                  => (string) $custodios->estado,
            'celular'                 => (string) $custodios->celular,
            'ext'                     => (string) $custodios->ext,
            'fechaCreacion'           => (string) $custodios->created_at,
            'fechaActualizacion'      => (string) $custodios->updated_at,
            'fechaEliminacion'        => isset($custodios->deleted_at) ? (string) $custodios->deleted_at : null,
            'image'                   => env('APP_URL').'/img/perfil/'.$custodios->image,
            'links'                   => [
                [
                    'rel'  => 'custodios.puestos',
                    'href' => route('custodios.puestos.index', $custodios),
                ],
            ],
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'id'                      => 'id',
            'nombre_responsable'      => 'nombre_responsable',
            'pais'                    => 'pais',
            'ciudad'                  => 'ciudad',
            'direccion'               => 'direccion',
            'documentoIdentificacion' => 'documentoIdentificacion',
            'cargo'                   => 'cargo',
            'compania'                => 'compania',
            'telefono'                => 'telefono',
            'estado'                  => 'estado',
            'celular'                 => 'celular',
            'ext'                     => 'ext',
            'image'                   => 'image',
            'fechaCreacion'           => 'created_at',
            'fechaActualizacion'      => 'updated_at',
            'fechaEliminacion'        => 'deleted_at',
        ];

        return isset($attributes[$index]) ? $attributes[$index] : null;
    }

    public static function transformedAttribute($index)
    {
        $attributes = [
            'id'                      => 'id',
            'nombre_responsable'      => 'nombre_responsable',
            'pais'                    => 'pais',
            'ciudad'                  => 'ciudad',
            'direccion'               => 'direccion',
            'documentoIdentificacion' => 'documentoIdentificacion',
            'cargo'                   => 'cargo',
            'compania'                => 'compania',
            'telefono'                => 'telefono',
            'estado'                  => 'estado',
            'celular'                 => 'celular',
            'ext'                     => 'ext',
            'image'                   => 'image',
            'created_at'              => 'fechaCreacion',
            'updated_at'              => 'fechaActualizacion',
            'deleted_at'              => 'fechaEliminacion',
        ];

        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}
