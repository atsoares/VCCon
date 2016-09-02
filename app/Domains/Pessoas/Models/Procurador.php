<?php

namespace Sgpweb\Domains\Pessoas\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\AuditingTrait;
use Laracasts\Presenter\PresentableTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class Procurador extends Model
{
    use AuditingTrait;
    use PresentableTrait;
    use SoftDeletes;

    /**
     * Tabela que está associada com o model.
     *
     * @var string
     */
    protected $table = 'procuradores';

    /**
     * Arquivo para alteração de campos da view
     *
     * @var string
     */
    protected $presenter = \Sgpweb\Domains\Pessoas\Presenters\ProcuradorPresenter::class;

    /**
     * Atributos da tabela que podem ser preenchidos.
     *
     * @var array
     */
    protected $fillable = [
        'pessoas_id',
        'procurador_tipos_id',
        'codigo_pe',
        'procurador_substituido',
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
     * Get the pessoa, procuradorTipo for the Procurador.
     * @return collection pessoa, procuradorTipo
     */
    public function pessoas()
    {
        return $this->belongsTo('Sgpweb\Domains\Pessoas\Models\Pessoa');
    }

    public function procuradorTipos()
    {
        return $this->belongsTo('Sgpweb\Domains\Pessoas\Models\ProcuradorTipo');
    }
}
