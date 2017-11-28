<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Mpociot\Firebase\SyncsWithFirebase;

class Modulo extends Model
{
    use Notifiable, HasApiTokens;
    use SyncsWithFirebase;

    protected $fillable = [
        'modulo',
        'activo',
    ];

    public function permisos()
    {
        return $this->hasMany('App\Permiso', 'modulo_id', 'id');
    }
}
