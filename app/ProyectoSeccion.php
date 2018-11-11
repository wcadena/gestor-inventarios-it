<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $proyecto_id
 * @property string $name
 * @property string $descripcion
 * @property string $decoracion
 * @property string $tipo
 * @property int $orden
 * @property string $principal
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Proyecto $proyecto
 * @property InformeProyectosSeccion[] $informeProyectosSeccions
 */
class ProyectoSeccion extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['proyecto_id', 'name', 'descripcion', 'decoracion', 'tipo', 'orden', 'principal', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * The storage format of the model's date columns.
     * 
     * @var string
     */
    protected $dateFormat = 'U';

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function proyecto()
    {
        return $this->belongsTo('app\Proyecto');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function informeProyectosSeccions()
    {
        return $this->hasMany('app\InformeProyectosSeccion');
    }
}
