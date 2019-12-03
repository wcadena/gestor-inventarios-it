<?php

namespace App\Models;

use Laratrust\Models\LaratrustTeam;

class Team extends LaratrustTeam
{
    //
    protected $fillable = ['name', 'display_name', 'description'];
}
