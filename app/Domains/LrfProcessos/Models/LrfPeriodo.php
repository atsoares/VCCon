<?php

namespace Sgpweb\Domains\LrfProcessos\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\AuditingTrait;
use Laracasts\Presenter\PresentableTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class LrfPeriodo extends Model
{
    use AuditingTrait;
    use PresentableTrait;
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'lrf.periodos';

    /**
     * Arquivo para alteração de campos da view
     *
     * @var string
     */
    protected $presenter = \Sgpweb\Domains\LrfProcessos\Presenters\LrfPeriodoPresenter::class;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'codigo',
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
     * Get the LrfData for the LrfPeriodo.
     * @return collection LrfData
     */
    public function getLrfDatas()
    {
        return $this->hasMany('Sgpweb\Domains\LrfProcessos\Models\LrfData', 'periodo_id');
    }
}
