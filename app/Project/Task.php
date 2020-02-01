<?php

namespace App\Project;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'title', 'priority', 'description', 'due_date', 'assign_to', 'project_id', 'milestone_id', 'status', 'order',
    ];

    public function project()
    {
        return $this->hasOne('App\Project\Project', 'id', 'project_id');
    }

    public function user()
    {
        return $this->hasOne('App\User', 'id', 'assign_to');
    }

    public function comments()
    {
        return $this->hasMany('App\Project\Comment', 'task_id', 'id')->orderBy('id', 'DESC');
    }

    public function taskFiles()
    {
        return $this->hasMany('App\Project\TaskFile', 'task_id', 'id')->orderBy('id', 'DESC');
    }

    public function milestone()
    {
        if ($this->milestone_id) {
            return Milestone::find($this->milestone_id);
        } else {
            return null;
        }
    }

    public function sub_tasks()
    {
        return $this->hasMany('App\Project\SubTask', 'task_id', 'id')->orderBy('id', 'DESC');
    }
}
