<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CheckList_OpcionesCheckList extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['check_list_id','opciones_check_list_id','tipo','atributo','valor1','valor2','valor3','valor4','valor5','valor6','valor7','valor8','valor9','valor10'];

    public function estados() {
        return $this->hasMany('ACTIVO', 'INACTIVO');
    }
    public static function getENUM($tabla)
    {
        $type = DB::select( DB::raw("SHOW COLUMNS FROM opciones_check_lists WHERE Field = '".$tabla."'") )[0]->Type;
        preg_match('/^enum\((.*)\)$/', $type, $matches);
        $enum = array();
        foreach( explode(',', $matches[1]) as $value )
        {
            $v = trim( $value, "'" );
            $enum = array_add($enum, $v, $v);
        }
        return $enum;
    }

    /**
     * Scope a query to only include users of a given type.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param mixed $type
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeOpcionesCheckLists($query, $opciones_check_list_id, $check_list_id)
    {
        return $query
            ->where('check_list_id', $check_list_id)
            ->where('opciones_check_list_id', $opciones_check_list_id);
    }
    
}
