<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','first_name','last_name','rol','padrino','username','email','password'
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
        'id' => 'facebook_user_id',
        'name' => 'name',
        'email' => 'email',
        'email' => 'username',
        'FirstName' => 'first_name',
        'MiddleName' => 'last_name',
    ];
    public static function getENUM($tabla)
    {
        $type = DB::select( DB::raw("SHOW COLUMNS FROM users WHERE Field = '".$tabla."'") )[0]->Type;
        preg_match('/^enum\((.*)\)$/', $type, $matches);
        $enum = array();
        foreach( explode(',', $matches[1]) as $value )
        {
            $v = trim( $value, "'" );
            $enum = array_add($enum, $v, $v);
        }
        return $enum;
    }
}
