<?php

namespace VCCon\Domains\Condominos\Models;

use Iatstuti\Database\Support\NullableFields;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\AuditingTrait;
use Laracasts\Presenter\PresentableTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContatoCondomino extends Model
{
    use AuditingTrait;
    use PresentableTrait;
    use SoftDeletes;
    use NullableFields;

    /**
     * Tabela que está associada com o model.
     *
     * @var string
     */
    protected $table = 'contatos_condominos';

    /**
     * Arquivo para alteração de campos da view
     *
     * @var string
     */
    protected $presenter = \VCCon\Domains\Condominos\Presenters\ContatoCondominoPresenter::class;

    /**
     * Atributos da tabela que podem ser preenchidos.
     *
     * @var array
     */
    protected $fillable = [
        'nome',
        'telefone',
        'email',
        'condomino_id',
        'ativo'
    ];

    protected $nullable = [
        'telefone',
        'email'
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
     * Get the Condomino for the .
     * @return collection 
     */
    public function condominos()
    {
        return $this->belongsTo('VCCon\Domains\Condominos\Models\Condomino', 'condomino_id');
    }
}
