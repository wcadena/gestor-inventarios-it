<?php

namespace app;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property string $name
 * @property string $descripcion
 * @property string $decoracion
 * @property string $tipo
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property ProyectoSeccion[] $proyectoSeccions
 */
class Proyecto extends Model
{
    use SoftDeletes;
    /**
     * @var array
     */
    protected $fillable = ['name', 'descripcion', 'decoracion', 'tipo', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function proyectoSeccions()
    {
        return $this->hasMany('App\ProyectoSeccion');
    }
}
