<?php

namespace Sgpweb\Domains\Pessoas\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\AuditingTrait;
use Laracasts\Presenter\PresentableTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pessoa extends Model
{
    use AuditingTrait;
    use PresentableTrait;
    use SoftDeletes;

    /**
     * Tabela que está associada com o model.
     *
     * @var string
     */
    protected $table = 'pessoas';

    /**
     * Arquivo para alteração de campos da view
     *
     * @var string
     */
    protected $presenter = \Sgpweb\Domains\Pessoas\Presenters\PessoaPresenter::class;

    /**
     * Atributos da tabela que podem ser preenchidos.
     *
     * @var array
     */
    protected $fillable = [
        'cpf',
        'nome_completo',
        'nome_condensado',
        'data_nomeacao',
        'data_posse',
        'data_saida',
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
     * Get the Procurador for the procuradorTipo.
     * @return collection procuradorTipo
     */
    public function procuradores()
    {
        return $this->hasMany('Sgpweb\Domains\Pessoas\Models\Procurador', 'pessoas_id');
    }
}
