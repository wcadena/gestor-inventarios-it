<?php

namespace App\Project;

use Illuminate\Database\Eloquent\Model;

class ClientWorkspace extends Model
{
    protected $fillable = [
        'client_id','workspace_id'
    ];
}
