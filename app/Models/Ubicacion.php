<?php

namespace App\Models;

use App\Transformers\UbicacionTransformer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ubicacion extends Model
{
    use SoftDeletes;

    public $transformer = UbicacionTransformer::class;
    protected $dates = ['ubicacion'];
    protected $fillable = ['estacione_id', 'edificio', 'piso', 'area_id', 'imagen'];
    /*
     * estado	enum('BUENO', 'MALO', 'NUEVO')
     * estatus	enum('VIGENTE', 'BODEGA', 'BAJA')
     * garantia	enum('SI', 'NO')
     * */

    public static function getENUM($tabla)
    {
        $type = DB::select(DB::raw("SHOW COLUMNS FROM ubicacions WHERE Field = '".$tabla."'"))[0]->Type;
        preg_match('/^enum\((.*)\)$/', $type, $matches);
        $enum = [];
        foreach (explode(',', $matches[1]) as $value) {
            $v = trim($value, "'");
            $enum = array_add($enum, $v, $v);
        }

        return $enum;
    }

    ////////////////////////////////////////////////////////////////////

    public function estacionxc()
    {
        return $this->hasOne(\App\Models\Estaciones::class, 'id', 'estacione_id');
    }

    public function areaxc()
    {
        return $this->hasOne(\App\Models\Areas::class, 'id', 'area_id');
    }

    public function puestosxc()
    {
        return $this->hasMany(\App\Models\Puesto::class, 'ubicacion_id', 'id');
    }
}
