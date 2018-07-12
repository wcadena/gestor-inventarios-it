<?php

namespace App;

use App\Scopes\EmpresaTScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Estaciones extends Model
{
    protected $dates = ['deleted_at'];
    protected $fillable = ['estacion', 'empresa', 'nombre_largo', 'pais'];

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new EmpresaTScope());
    }

    public function empresaxc()
    {
        return $this->hasOne('App\Empresa', 'empresa', 'empresa');
    }

    public static function getENUM($tabla)
    {
        $type = DB::select(DB::raw("SHOW COLUMNS FROM estaciones WHERE Field = '".$tabla."'"))[0]->Type;
        preg_match('/^enum\((.*)\)$/', $type, $matches);
        $enum = [];
        $enumerado = explode(',', $matches[1]);
        foreach ($enumerado as $value) {
            $v = trim($value, "'");
            $enum = array_add($enum, $v, $v);
        }

        return $enum;
    }
}
