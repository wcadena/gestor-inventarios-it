<?php

namespace App;

use Laratrust\Models\LaratrustPermission;

class Permission extends LaratrustPermission
{
    //
    protected $fillable = array('name', 'display_name', 'description');
}
