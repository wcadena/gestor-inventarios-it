<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FileEntry extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['vinculo', 'vinculo_padre', 'filename', 'mime', 'path', 'size', 'user_id', 'tipo', 'imageable_type', 'imageable_id'];

    /**
     * Get all of the owning imageable models or files.
     */
    public function imageable()
    {
        return $this->morphTo();
    }
}
