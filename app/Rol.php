<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Mpociot\Firebase\SyncsWithFirebase;

class Rol extends Model
{
    use Notifiable, HasApiTokens,SoftDeletes;
    use SyncsWithFirebase;

    protected $fillable = [
        'rol',
        'descripcion',
    ];

    public function users()
    {

        return $this->belongsToMany('App\User', 'usuariorols' )->using('App\Usuariorol');
    }

    public function permisos()
    {

        return $this->belongsToMany('App\Permiso', 'permisorols' )->using('App\Permisorol');
    }
}
