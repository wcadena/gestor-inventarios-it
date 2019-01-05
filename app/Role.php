<?php

namespace App;

use Laratrust\Models\LaratrustRole;

class Role extends LaratrustRole
{
    //
    protected $fillable = array('name', 'display_name', 'description');
}
