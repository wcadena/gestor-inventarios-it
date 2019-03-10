<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Wuwx\LaravelAutoNumber\AutoNumberTrait;

class InformeMantenimientoPreventivo extends Model
{
    use SoftDeletes;
    use AutoNumberTrait; //para autonumerico

    public $transformer = \App\Transformers\InformeMantenimientoPreventivoTransformer::class;
    protected $table = 'informe_manto_prevs';
    protected $dates = ['deleted_at'];
    protected $fillable = ['id', 'custodio_id', 'area_id',
    'no_orden', 'fecha_solicitud', 'fecha_ejecucion', 'hora_inicio',
    'hora_fin', 'informe_manto_prev_cate_id', 'requerimiento', 'solucion', 'resolucion', 'observacion', 'vinculo', 'telefono_contacto', 'celular_contacto',
        'email_contacto', 'ip', 'like', 'publico_privado', ];
    /*
     * estado	enum('BUENO', 'MALO', 'NUEVO')
     * estatus	enum('VIGENTE', 'BODEGA', 'BAJA')
     * garantia	enum('SI', 'NO')
     * */

    /**
     * Return the autonumber configuration array for this model.
     *
     * @return array
     */
    public function getAutoNumberOptions()
    {
        return [
            'no_orden' => [
                'format' => Auth::user()->empresa.'.?', // autonumber format. '?' will be replaced with the generated number.
                'length' => 5, // The number of digits in an autonumber
            ],
        ];
    }

    public function areaxc()
    {
        return $this->hasOne('App\Areas', 'id', 'area_id');
    }

    public function custodioxc()
    {
        return $this->hasOne('App\Custodios', 'id', 'custodio_id');
    }

    public function informe_manto_prev_catexc()
    {
        return $this->hasOne('App\User', 'id', 'informe_manto_prev_cate_id');
    }

    ////////////////////////////////////////////////////////////////////
    public function modelo_equipoxc()
    {
        return $this->hasOne('App\ModeloEquipo', 'id', 'modelo_equipo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function informeProyectosSeccions()
    {
        return $this->hasMany('App\InformeProyectosSeccion', 'informe_manto_prev_id');
    }

    /**
     * Get the post's image or file.
     */
    public function images()
    {
        return $this->morphMany('App\FileEntry', 'imageable');
    }
}
