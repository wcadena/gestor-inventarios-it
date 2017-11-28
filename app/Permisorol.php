<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Mpociot\Firebase\SyncsWithFirebase;

class Permisorol extends Pivot
{
    use Notifiable, HasApiTokens;
    use SyncsWithFirebase;

    use SoftDeletes;

    protected $dates = ['deleted_at'];


    protected $table = 'permisorols';

    protected $fillable = [
        'permiso_id',
        'rol_id',
    ];


}
