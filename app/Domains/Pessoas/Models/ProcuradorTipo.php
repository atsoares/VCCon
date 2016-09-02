<?php

namespace Sgpweb\Domains\Pessoas\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\AuditingTrait;
use Laracasts\Presenter\PresentableTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProcuradorTipo extends Model
{
    use AuditingTrait;
    use PresentableTrait;
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'procurador_tipos';

    /**
     * Arquivo para alteração de campos da view
     *
     * @var string
     */
    protected $presenter = \Sgpweb\Domains\Pessoas\Presenters\ProcuradorTipoPresenter::class;

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
    public function procuradores()
    {
        return $this->hasMany('Sgpweb\Domains\Pessoas\Models\Procurador', 'procurador_tipos_id');
    }
}
