<?php

namespace App;

use App\Transformers\PuestoCustodiosTransformer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class PuestoCustodios extends Model
{
    use Notifiable, HasApiTokens, SoftDeletes;
    protected $table = 'puestos_custodios';

    public $transformer = PuestoCustodiosTransformer::class;

    protected $fillable = [
        'puesto_id', 'custodio_id', 'fecha_inicio', 'fecha_fin', 'horas_trabajadas',
    ];

    public function custodio()
    {
        return $this->belongsTo(Custodios::class, 'custodio_id');
    }

    public function puesto()
    {
        return $this->belongsTo(Puesto::class, 'puesto_id');
    }
}
