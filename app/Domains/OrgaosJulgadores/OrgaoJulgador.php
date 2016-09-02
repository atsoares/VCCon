<?php

namespace Sgpweb\Domains\OrgaosJulgadores;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\AuditingTrait;
use Laracasts\Presenter\PresentableTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrgaoJulgador extends Model
{
    use AuditingTrait;
    use PresentableTrait;
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'orgaos_julgadores';

    /**
     * Arquivo para alteração de campos da view
     * 
     * @var string
     */
    protected $presenter = \Sgpweb\Domains\OrgaosJulgadores\Presenters\OrgaoJulgadorPresenter::class;

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
}
