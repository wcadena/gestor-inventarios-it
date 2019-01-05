<?php

namespace App;

use Laratrust\Models\LaratrustTeam;

class Team extends LaratrustTeam
{
    //
    protected $fillable = array('name', 'display_name', 'description');
}
