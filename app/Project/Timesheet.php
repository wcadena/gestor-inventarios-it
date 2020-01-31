<?php

namespace App\Project;

use Illuminate\Database\Eloquent\Model;

class Timesheet extends Model
{
    protected $fillable = [
        'project_id',
        'task_id',
        'date',
        'time',
        'description',
    ];

    public function task()
    {
        return $this->hasOne('App\Task', 'id', 'task_id');
    }
}
