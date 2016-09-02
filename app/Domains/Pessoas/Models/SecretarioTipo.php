<?php

namespace Sgpweb\Domains\Pessoas\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\AuditingTrait;
use Laracasts\Presenter\PresentableTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class SecretarioTipo extends Model
{
    use AuditingTrait;
    use PresentableTrait;
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'secretario_tipos';

    /**
     * Arquivo para alteração de campos da view
     *
     * @var string
     */
    protected $presenter = \Sgpweb\Domains\Pessoas\Presenters\SecretarioTipoPresenter::class;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome',
        'ativo'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'deleted_at'
    ];

    /**
     * Get the Procurador for the procuradorTipo.
     * @return collection procuradorTipo
     */
    public function secretarios()
    {
        return $this->hasMany('Sgpweb\Domains\Pessoas\Models\Secretario', 'secretario_tipos_id');
    }
}
