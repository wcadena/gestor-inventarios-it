<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Usuariorol extends Pivot
{
    use Notifiable, HasApiTokens, SoftDeletes;

    protected $fillable = [
        'rol_id',
        'user_id',
    ];

    public function users()
    {
        return $this->belongsTo('App\User');
    }

    public function rols()
    {
        return $this->belongsTo('App\Rol');
    }
}
