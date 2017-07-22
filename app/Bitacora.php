<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Bitacora extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['id_equipos','titulo','custodio_id','user_id','problema','solucion','estado','fecha_ingreso'];

    public static function getENUM($tabla)
    {
        $type = DB::select( DB::raw("SHOW COLUMNS FROM bitacoras WHERE Field = '".$tabla."'") )[0]->Type;
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
    public function userxc()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
    public function equiposxc()
    {
        return $this->hasMany('App\Equipos', 'id_equipos', 'id');
    }
}
