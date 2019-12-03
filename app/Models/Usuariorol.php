<?php

namespace App\Models;

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
        return $this->belongsTo(\App\Models\User::class);
    }

    public function rols()
    {
        return $this->belongsTo('App\Rol');
    }
}
