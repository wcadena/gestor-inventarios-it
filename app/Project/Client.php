<?php

namespace App\Project;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Client extends Authenticatable
{
    use Notifiable;
    protected $guard = 'client';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','avatar','currant_workspace'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAllPermission(){
        return [
            "create milestone",
            "edit milestone",
            "delete milestone",
            "show milestone",
            "create task",
            "edit task",
            "delete task",
            "show task",
            "move task",
            "show activity",
            "show uploading",
            "show timesheet",
            "show bug report",
            "create bug report",
            "edit bug report",
            "delete bug report",
            "move bug report",
        ];
    }

    public function getPermission($project_id){
        $data = ClientProject::where('client_id','=',$this->id)->where('project_id','=',$project_id)->first();
        return json_decode($data->permission,true);
    }

    public function getGuard(){
        return $this->guard;
    }

    public function workspace()
    {
        return $this->belongsToMany('App\Workspace', 'client_workspaces', 'client_id', 'workspace_id');
    }
    public function currantWorkspace()
    {
        return $this->hasOne('App\Workspace', 'id', 'currant_workspace');
    }

}
