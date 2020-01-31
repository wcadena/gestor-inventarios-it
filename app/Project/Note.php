<?php

namespace App\Project;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = [
        'title', 'text', 'workspace', 'color', 'created_by',
    ];
}
