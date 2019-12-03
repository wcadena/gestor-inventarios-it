<?php

namespace App\Models;

use App\Scopes\EmpresaTScope;
use App\Transformers\AreasTransformer;
use Illuminate\Database\Eloquent\Model;

class Areas extends Model
{
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new EmpresaTScope());
    }

    protected $fillable = ['area', 'empresa'];
    public $transformer = AreasTransformer::class;

    public function checklistxc()
    {
        return $this->hasMany(\App\Models\CheckList::class, 'area_id');
    }

    public function equiposxc()
    {
        //return $this->hasMany('App\Models\Equipos',);
        return $this->hasMany(\App\Models\Equipos::class, 'area_id', 'id');
    }

    public function empresaxc()
    {
        return $this->hasOne(\App\Models\Empresa::class, 'empresa', 'empresa');
    }
}
