<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OAuthApp extends Model
{
    const AUTH_ACTIVO = '1';
    const AUTH_INACTIVO = '0';

    public static function generarToken()
    {
        return str_random(100);
    }

    public function esActivo()
    {
        return $this->activo == User::USUARIO_VERIFICADO;
    }

    protected $dates = ['deleted_at'];
    protected $fillable = ['id', 'token_secret', 'client_id', 'activo', 'expires_in', 'access_token', 'refresh_token', 'client_secret'];
}
