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

}
