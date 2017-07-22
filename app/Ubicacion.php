<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ubicacion extends Model
{
    use SoftDeletes;
    protected $dates = ['ubicacion'];
    protected $fillable = ['estacione_id', 'edificio', 'piso', 'area_id', 'imagen'];
    /*
     * estado	enum('BUENO', 'MALO', 'NUEVO')
     * estatus	enum('VIGENTE', 'BODEGA', 'BAJA')
     * garantia	enum('SI', 'NO')
     * */


    public static function getENUM($tabla)
    {
        $type = DB::select( DB::raw("SHOW COLUMNS FROM ubicacions WHERE Field = '".$tabla."'") )[0]->Type;
        preg_match('/^enum\((.*)\)$/', $type, $matches);
        $enum = array();
        foreach( explode(',', $matches[1]) as $value )
        {
            $v = trim( $value, "'" );
            $enum = array_add($enum, $v, $v);
        }
        return $enum;
    }

////////////////////////////////////////////////////////////////////

    public function estacionxc()
    {
        return $this->hasOne('App\Estaciones', 'id', 'estacione_id');
    }
    public function areaxc()
    {
        return $this->hasOne('App\Areas', 'id', 'area_id');
    }


}
