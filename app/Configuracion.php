<?php

namespace App;

use App\Scopes\EmpresaTScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Configuracion extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['atributo', 'tipo', 'valores_fuente', 'fijo', 'valor', 'empresa'];

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new EmpresaTScope());
    }

    public static function getENUM($tabla)
    {
        $type = DB::select(DB::raw("SHOW COLUMNS FROM configuracions WHERE Field = '".$tabla."'"))[0]->Type;
        preg_match('/^enum\((.*)\)$/', $type, $matches);
        $enum = [];
        foreach (explode(',', $matches[1]) as $value) {
            $v = trim($value, "'");
            $enum = array_add($enum, $v, $v);
        }

        return $enum;
    }

    public function empresaxc()
    {
        return $this->hasOne('App\Empresa', 'empresa', 'empresa');
    }

    public function scopeConfig($query, $type)
    {
        return $query->where('atributo', $type)->first()->valor;
    }
}
