<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Areas extends Model
{

    protected $fillable = ['area'];
    public function checklistxc()
    {
        return $this->hasMany('App\CheckList', 'area_id');
    }

    public function equiposxc()
    {
        //return $this->hasMany('App\Equipos',);
        return $this->hasMany('App\Equipos', 'area_id', 'id');
    }

}
