<?php

namespace Sgpweb\Domains\Pessoas\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\AuditingTrait;
use Laracasts\Presenter\PresentableTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class Relator extends Model
{
    use AuditingTrait;
    use PresentableTrait;
    use SoftDeletes;

    /**
     * Tabela que está associada com o model.
     *
     * @var string
     */
    protected $table = 'relatores';

    /**
     * Arquivo para alteração de campos da view
     *
     * @var string
     */
    protected $presenter = \Sgpweb\Domains\Pessoas\Presenters\RelatorPresenter::class;

    /**
     * Atributos da tabela que podem ser preenchidos.
     *
     * @var array
     */
    protected $fillable = [
        'pessoas_id',
        'relator_tipos_id',
        'codigo_pe',
        'relator_substituido',
        'ativo'
    ];

    /**
     * Atributos que devem ser modificados(ler sobre Mutators no Laravel) para formato date.
     *
     * @var array
     */
    protected $dates = [
        'deleted_at'
    ];

    /**
     * Get the pessoa, relatorTipo for the Relator.
     * @return collection pessoa, relatorTipo
     */
    public function pessoas()
    {
        return $this->belongsTo('Sgpweb\Domains\Pessoas\Models\Pessoa');
    }

    public function relatorTipos()
    {
        return $this->belongsTo('Sgpweb\Domains\Pessoas\Models\RelatorTipo');
    }

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'relator_substituido' => 'integer',
    ];
}
