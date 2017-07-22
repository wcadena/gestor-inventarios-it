<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class RepoNovedades extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['custodio_id','correo','fecha_novedades','novedad','observaciones','antiguo_custodio_id','traslado_custodio_id','estado'];
    /*
     * estado	enum('BUENO', 'MALO', 'NUEVO')
     * estatus	enum('VIGENTE', 'BODEGA', 'BAJA')
     * garantia	enum('SI', 'NO')
     * */


    public static function getENUM($tabla)
    {
        $type = DB::select( DB::raw("SHOW COLUMNS FROM repo_novedades WHERE Field = '".$tabla."'") )[0]->Type;
        preg_match('/^enum\((.*)\)$/', $type, $matches);
        $enum = array();
        foreach( explode(',', $matches[1]) as $value )
        {
            $v = trim( $value, "'" );
            $enum = array_add($enum, $v, $v);
        }
        return $enum;
    }

    public function custodioxc()
    {
        return $this->hasOne('App\Custodios', 'id', 'custodio_id');
    }

    public function antiguo_custodioxc()
    {
        return $this->hasOne('App\Custodios', 'id', 'antiguo_custodio_id');
    }
    public function traslado_custodioxc()
    {
        return $this->hasOne('App\Custodios', 'id', 'traslado_custodio_id');
    }

    public function reponovedadedetalleshm()
    {
        return $this->hasMany('App\RepoNovedadesDetalle', 'repo_novedades_id', 'id');
    }



}
