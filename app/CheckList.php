<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CheckList extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['area_id','user_id','id_check_lists','unik_check_lists'];
    public function areaxc()
    {
        return $this->hasOne('App\Areas', 'id', 'area_id');
    }
    public function userxc()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
    public function equiposxm()
    {
        return $this->belongsTo('App\Equipos', 'id','check_list_id');
    }
    public function checklistxm()
    {
        return $this->belongsTo('App\CheckList_OpcionesCheckList', 'id','check_list_id');
    }

}
