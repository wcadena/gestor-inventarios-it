<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $custodio_id
 * @property int $area_id
 * @property int $informe_manto_prev_cate_id
 * @property string $no_orden
 * @property string $fecha_solicitud
 * @property string $fecha_ejecucion
 * @property string $hora_inicio
 * @property string $hora_fin
 * @property string $requerimiento
 * @property string $solucion
 * @property string $resolucion
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property string $vinculo
 * @property string $observacion
 * @property string $telefono_contacto
 * @property string $celular_contacto
 * @property string $email_contacto
 * @property string $ip
 * @property string $like
 * @property string $publico_privado
 * @property Area $area
 * @property Custodio $custodio
 * @property InformeMantoPrevCate $informeMantoPrevCate
 * @property InformeMantoHistorico[] $informeMantoHistoricos
 * @property InformeMantoPrevTec[] $informeMantoPrevTecs
 * @property InformeProyectosSeccion[] $informeProyectosSeccions
 */
class InformeMantoPrevs extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['custodio_id', 'area_id', 'informe_manto_prev_cate_id', 'no_orden', 'fecha_solicitud', 'fecha_ejecucion', 'hora_inicio', 'hora_fin', 'requerimiento', 'solucion', 'resolucion', 'created_at', 'updated_at', 'deleted_at', 'vinculo', 'observacion', 'telefono_contacto', 'celular_contacto', 'email_contacto', 'ip', 'like', 'publico_privado'];

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
    public function area()
    {
        return $this->belongsTo('App\Area');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function custodio()
    {
        return $this->belongsTo('App\Custodio');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function informeMantoPrevCate()
    {
        return $this->belongsTo('app\InformeMantoPrevCate');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function informeMantoHistoricos()
    {
        return $this->hasMany('app\InformeMantoHistorico');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function informeMantoPrevTecs()
    {
        return $this->hasMany('app\InformeMantoPrevTec');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function informeProyectosSeccions()
    {
        return $this->hasMany('app\InformeProyectosSeccion');
    }
}
