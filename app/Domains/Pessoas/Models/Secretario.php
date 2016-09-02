<?php

namespace Sgpweb\Domains\Pessoas\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\AuditingTrait;
use Laracasts\Presenter\PresentableTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class Secretario extends Model
{
    use AuditingTrait;
    use PresentableTrait;
    use SoftDeletes;

    /**
     * Tabela que está associada com o model.
     *
     * @var string
     */
    protected $table = 'secretarios';

    /**
     * Arquivo para alteração de campos da view
     *
     * @var string
     */
    protected $presenter = \Sgpweb\Domains\Pessoas\Presenters\SecretarioPresenter::class;

    /**
     * Atributos da tabela que podem ser preenchidos.
     *
     * @var array
     */
    protected $fillable = [
        'pessoas_id',
        'secretario_tipos_id',
        'modelo_certidao',
        'secretario_exercicio',
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
     * Get the pessoa, secretarioTipo for the Secretario.
     * @return collection pessoa, secretarioTipo
     */
    public function pessoas()
    {
        return $this->belongsTo('Sgpweb\Domains\Pessoas\Models\Pessoa');
    }

    public function secretarioTipos()
    {
        return $this->belongsTo('Sgpweb\Domains\Pessoas\Models\SecretarioTipo');
    }
}
