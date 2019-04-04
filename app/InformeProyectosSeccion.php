<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $informe_manto_prev_id
 * @property int $proyecto_seccion_id
 * @property string $tipo
 * @property int $orden
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property InformeMantoPrev $informeMantoPrev
 * @property ProyectoSeccion $proyectoSeccion
 */
class InformeProyectosSeccion extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['informe_manto_prev_id', 'proyecto_seccion_id', 'tipo', 'orden', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * The storage format of the model's date columns.
     *
     * @var string
     */
    //protected $dateFormat = 'U';

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function informeMantoPrev()
    {
        return $this->belongsTo('App\InformeMantoPrevs');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function proyectoSeccion()
    {
        return $this->belongsTo('App\ProyectoSeccion');
    }
}
