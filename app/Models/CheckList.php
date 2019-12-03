<?php

namespace App\Models;

use App\Transformers\ChecklistTransformer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CheckList extends Model
{
    use SoftDeletes;

    public $transformer = ChecklistTransformer::class;

    protected $dates = ['deleted_at'];
    protected $fillable = ['area_id', 'user_id', 'id_check_lists', 'unik_check_lists'];

    public function areaxc()
    {
        return $this->hasOne(\App\Models\Areas::class, 'id', 'area_id');
    }

    public function userxc()
    {
        return $this->hasOne(\App\Models\User::class, 'id', 'user_id');
    }

    public function equiposxm()
    {
        return $this->belongsTo(\App\Models\Equipos::class, 'id', 'check_list_id');
    }

    public function checklistxm()
    {
        return $this->belongsTo(\App\Models\CheckList_OpcionesCheckList::class, 'id', 'check_list_id');
    }
}
