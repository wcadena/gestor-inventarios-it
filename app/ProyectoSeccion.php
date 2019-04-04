<?php

namespace app;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

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
    use SoftDeletes;
    /**
     * @var array
     */
    protected $fillable = ['proyecto_id', 'name', 'descripcion', 'decoracion', 'tipo', 'orden', 'principal', 'created_at', 'updated_at', 'deleted_at'];

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
    public function proyecto()
    {
        return $this->hasOne('App\Proyecto');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function informeProyectosSeccions()
    {
        return $this->hasMany('App\InformeProyectosSeccion');
    }

    /**
     * Scope a query Proyectos.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeProyectoId($query, $proyecto_id)
    {
        return $query->where('proyecto_id', '=', $proyecto_id);
    }

    /**
     * para dar el enum
     *  `tipo` enum('titulo','seccion')
     *   `principal` enum('si','no').
     *
     * @param $tabla
     *
     * @return array
     */
    public static function getENUM($tabla)
    {
        $type = DB::select(DB::raw("SHOW COLUMNS FROM proyecto_seccions WHERE Field = '".$tabla."'"))[0]->Type;
        preg_match('/^enum\((.*)\)$/', $type, $matches);
        $enum = [];
        foreach (explode(',', $matches[1]) as $value) {
            $v = trim($value, "'");
            $enum = array_add($enum, $v, $v);
        }

        return $enum;
    }
}
