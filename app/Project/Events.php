<?php

namespace App\Project;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $fillable = [
        'title','className','workspace','created_by'
    ];
}
