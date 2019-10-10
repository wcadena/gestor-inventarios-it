<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Modulo extends Model
{
    use Notifiable, HasApiTokens;

    protected $fillable = [
        'modulo',
        'activo',
    ];

    public function permisos()
    {
        return $this->hasMany('App\Permiso', 'modulo_id', 'id');
    }
}
