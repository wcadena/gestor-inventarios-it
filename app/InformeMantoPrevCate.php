<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $categoria
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property InformeMantoPrev[] $informeMantoPrevs
 */
class InformeMantoPrevCate extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['categoria', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * The storage format of the model's date columns.
     *
     * @var string
     */
    protected $dateFormat = 'U';

    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function informeMantoPrevs()
    {
        return $this->hasMany('App\InformeMantoPrev');
    }
}
