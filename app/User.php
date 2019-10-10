<?php

namespace App;

use App\Notifications\MyOwnResetPassword;
use App\Transformers\UserTransformer;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Laratrust\Traits\LaratrustUserTrait;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use Notifiable, HasApiTokens, SoftDeletes;

    public $transformer = UserTransformer::class;

    const USUARIO_VERIFICADO = '1';
    const USUARIO_NO_VERIFICADO = '0';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'first_name', 'last_name', 'rol', 'username', 'password', 'email', 'verification_token', 'token', 'facebook_user_id', 'empresa', 'verified', 'custodio_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected static $graph_node_field_aliases = [
        'id'         => 'facebook_user_id',
        'name'       => 'name',
        'email'      => 'email',
        'email'      => 'username',
        'FirstName'  => 'first_name',
        'MiddleName' => 'last_name',
    ];

    public static function getENUM($tabla)
    {
        $type = DB::select(DB::raw("SHOW COLUMNS FROM users WHERE Field = '".$tabla."'"))[0]->Type;
        preg_match('/^enum\((.*)\)$/', $type, $matches);
        $enum = [];
        $enumerado = explode(',', $matches[1]);
        foreach ($enumerado as $value) {
            $v = trim($value, "'");
            $enum = array_add($enum, $v, $v);
        }

        return $enum;
    }

    public static function generarVerificationToken()
    {
        return str_random(36);
    }

    //////////////////////////////////////////////inicio mutadores
    public function setNameAttribute($valor)
    {
        $this->attributes['name'] = strtolower($valor);
    }

    public function getNameAttribute($valor)
    {
        return ucwords($valor);
    }

    public function setEmailAttribute($valor)
    {
        $this->attributes['email'] = strtolower($valor);
    }

    public function empresaxc()
    {
        return $this->hasOne('App\Empresa', 'empresa', 'empresa');
    }

    //////////////////////////////////////////////fin mutwadores

    /**
     * Send the password reset notification.
     *
     * @param string $token
     *
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new MyOwnResetPassword($token));
    }

    public function esVerificado()
    {
        return $this->verified == self::USUARIO_VERIFICADO;
    }

    public function getEmpresa()
    {
        return $this->empresa;
    }

    public function scopeRolesActivo($query, $rol)
    {
        return $query->whereIn('user_codsec', Role::find($rol)->users->pluck('user_codsec'));
    }

    /**
     * para los roles del paw solamente.
     */
    public function roles()
    {
        return $this->belongsToMany('App\Role', 'role_user', 'user_id', 'role_id');
        // return $this->belongsToMany('App\Rol', 'usuariorols')->using('App\Usuariorol');
        //return $this->belongsToMany('App\Role');
    }

    /**
     * para asignar un custodio al usuario.
     */
    public function custodio()
    {
        return $this->hasOne('App\Custodios', 'id', 'custodio_id');
    }
}
