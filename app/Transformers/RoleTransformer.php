<?php

namespace App\Transformers;

use App\Role;
use League\Fractal\TransformerAbstract;

class RoleTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Role $role)
    {
        return [
            'id'                 => (string) $role->id,
            'name'               => (string) $role->name,
            'display_name'       => (string) $role->display_name,
            'description'        => (string) $role->description,
            'fechaCreacion'      => (string) $role->created_at,
            'fechaActualizacion' => (string) $role->updated_at,

            'links'              => [
                [
                    'rel'  => 'self',
                    'href' => route('role.show', $role),
                ],
                [
                    'rel'  => 'role.user',
                    'href' => route('role.user', $role),
                ],
            ],
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'id'                 => 'id',
            'name'               => 'name',
            'display_name'       => 'display_name',
            'description'        => 'description',
            'fechaCreacion'      => 'created_at',
            'fechaActualizacion' => 'updated_at',
        ];

        return isset($attributes[$index]) ? $attributes[$index] : null;
    }

    public static function transformedAttribute($index)
    {
        $attributes = [
            'id'                 => 'id',
            'name'               => 'name',
            'display_name'       => 'display_name',
            'description'        => 'description',
            'fechaCreacion'      => 'created_at',
            'fechaActualizacion' => 'updated_at',
        ];

        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}
