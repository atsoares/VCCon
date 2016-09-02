<?php

namespace Sgpweb\Domains\LrfProcessos\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\AuditingTrait;
use Laracasts\Presenter\PresentableTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class LrfData extends Model
{
    use AuditingTrait;
    use PresentableTrait;
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'lrf.datas';

    /**
     * Arquivo para alteração de campos da view
     * 
     * @var string
     */
    protected $presenter = \Sgpweb\Domains\LrfProcessos\Presenters\LrfDataPresenter::class;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'exercicio',
        'periodo_id',
        'data_limite',
        'data_publicacao'
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
     * Get the LrfPeriodo for the LrfData.
     * @return collection LrfPeriodo
     */
    public function getLrfPeriodo()
    {
        return $this->belongsTo('Sgpweb\Domains\LrfProcessos\Models\LrfPeriodo', 'periodo_id');
    }
}
