<?php

namespace App;

use App\Transformers\PuestoTransformer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Laravel\Passport\HasApiTokens;

class Puesto extends Model
{
    use Notifiable, HasApiTokens, SoftDeletes;

    public $transformer = PuestoTransformer::class;

    protected $fillable = [
        'ubicacion_id', 'codigo', 'detalle', 'x', 'y', 'estado',
    ];

    public static function getENUM($tabla)
    {
        $type = DB::select(DB::raw("SHOW COLUMNS FROM puestos WHERE Field = '".$tabla."'"))[0]->Type;
        preg_match('/^enum\((.*)\)$/', $type, $matches);
        $enum = [];
        foreach (explode(',', $matches[1]) as $value) {
            $v = trim($value, "'");
            $enum = array_add($enum, $v, $v);
        }

        return $enum;
    }

    public static function generarCodigo()
    {
        return str_random(36);
    }

    public function modelo_equipoxc()
    {
        return $this->hasOne('App\ModeloEquipo', 'id', 'modelo_equipo_id');
    }

    public function PuestoCustodios()
    {
        return $this->hasMany(PuestoCustodios::class);
    }

    public function ubicacions()
    {
        return $this->hasOne('App\Ubicacion', 'id', 'ubicacion_id');
    }
}
