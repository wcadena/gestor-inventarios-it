<?php

namespace App\Project;

use Illuminate\Database\Eloquent\Model;

class BugReport extends Model
{
    protected $fillable = [
        'title',
        'priority',
        'description',
        'assign_to',
        'project_id',
        'status',
        'order',
    ];

    public static $arrStatus = [
        'unconfirmed',
        'confirmed',
        'in progress',
        'resolved',
        'verified',
    ];

    public function project()
    {
        return $this->hasOne('App\Project', 'id', 'project_id');
    }

    public function user()
    {
        return $this->hasOne('App\User', 'id', 'assign_to');
    }

    public function comments()
    {
        return $this->hasMany('App\BugComment', 'bug_id', 'id')->orderBy('id', 'DESC');
    }

    public function bugFiles()
    {
        return $this->hasMany('App\BugFile', 'bug_id', 'id')->orderBy('id', 'DESC');
    }
}
