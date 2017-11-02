<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Mpociot\Firebase\SyncsWithFirebase;

class Modulo extends Model
{
    use Notifiable, HasApiTokens, SoftDeletes;
    use SyncsWithFirebase;

    protected $fillable = [
        'modulo',
        'activo',
    ];
}
