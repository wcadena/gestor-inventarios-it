<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property int $informe_manto_prev_id
 * @property string $accion
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property InformeMantoPrev $informeMantoPrev
 * @property User $user
 */
class InformeMantoHistorico extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'informe_manto_prev_id', 'accion', 'created_at', 'updated_at', 'deleted_at'];

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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function informeMantoPrev()
    {
        return $this->belongsTo('App\InformeMantoPrev');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
