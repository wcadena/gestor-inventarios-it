<?php

namespace App\Project;

use Illuminate\Database\Eloquent\Model;

class UserProject extends Model
{
    protected $fillable = [
        'user_id','project_id'
    ];
}
