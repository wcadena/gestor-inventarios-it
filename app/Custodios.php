<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Custodios extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['nombre_responsable','ciudad','direccion','area-piso','documentoIdentificacion','cargo','compania','telefono','estado'];

    public function estados() {
        return $this->hasMany('ACTIVO', 'INACTIVO');
    }
    public function equiposhm()
    {
        return $this->hasMany('App\Equipos', 'custodio_id', 'id');
    }
    public function reponovedadeshm()
    {
        return $this->hasMany('App\RepoNovedades', 'custodio_id', 'id');
    }

}
