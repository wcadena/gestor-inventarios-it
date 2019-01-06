<?php

namespace App;

use App\Transformers\RoleTransformer;
use Laratrust\Models\LaratrustRole;

class Role extends LaratrustRole
{
    public $transformer = RoleTransformer::class;

    protected $fillable = ['name', 'display_name', 'description'];

    public function users()
    {
        return $this->belongsToMany('App\User', 'role_user', 'role_id', 'user_id');
    }
}
