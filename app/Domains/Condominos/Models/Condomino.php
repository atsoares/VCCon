<?php

namespace VCCon\Domains\Condominos\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\AuditingTrait;
use Laracasts\Presenter\PresentableTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class Condomino extends Model
{
    use AuditingTrait;
    use PresentableTrait;
    use SoftDeletes;

    /**
     * Tabela que está associada com o model.
     *
     * @var string
     */
    protected $table = 'condominos';

    /**
     * Arquivo para alteração de campos da view
     *
     * @var string
     */
    protected $presenter = \VCCon\Domains\Condominos\Presenters\CondominoPresenter::class;

    /**
     * Atributos da tabela que podem ser preenchidos.
     *
     * @var array
     */
    protected $fillable = [
        'nome',
        'email',
        'cpf',
        'telefone',
        'unidade_id',
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
     * Get the Condomino for the .
     * @return collection 
     */
    public function unidades()
    {
        return $this->belongsTo('VCCon\Domains\Unidades\Models\Unidade', 'unidade_id');
    }

    /**
     * Get the Condomino for the .
     * @return collection 
     */
    public function carrosCondominos()
    {
        return $this->hasMany('VCCon\Domains\Condominos\Models\CarroCondomino', 'condomino_id');
    }

    /**
     * Get the Condomino for the .
     * @return collection 
     */
    public function contatosCondominos()
    {
        return $this->hasMany('VCCon\Domains\Condominos\Models\ContatoCondomino', 'condomino_id');
    }

    /**
     * Get the Condomino for the .
     * @return collection 
     */
    public function reservas()
    {
        return $this->hasMany('VCCon\Domains\Reservas\Models\Reserva', 'condomino_id');
    }
}
