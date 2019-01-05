<?php

namespace App;

use Laratrust\Models\LaratrustRole;

class Role extends LaratrustRole
{
    //
    protected $fillable = ['name', 'display_name', 'description'];
    public function users()
    {
        return $this->belongsToMany('App\User','role_user',  'role_id','user_id');
    }
    
}
