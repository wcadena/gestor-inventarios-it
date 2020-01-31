<?php

namespace App\Project;

use Illuminate\Database\Eloquent\Model;

class Milestone extends Model
{
    protected $fillable = [
        'project_id','title','status','cost','summary'
    ];
}
