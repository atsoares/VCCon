<?php

namespace VCCon\Domains\Reunioes\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\AuditingTrait;
use Laracasts\Presenter\PresentableTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reuniao extends Model
{
    use AuditingTrait;
    use PresentableTrait;
    use SoftDeletes;

    /**
     * Tabela que está associada com o model.
     *
     * @var string
     */
    protected $table = 'agendar_reunioes';

    /**
     * Arquivo para alteração de campos da view
     *
     * @var string
     */
    protected $presenter = \VCCon\Domains\Reunioes\Presenters\ReuniaoPresenter::class;

    /**
     * Atributos da tabela que podem ser preenchidos.
     *
     * @var array
     */
    protected $fillable = [
        'tema',
        'condominos_presente',
        'observacao',
        'event_id',
        'horario_inicio'
    ];

    /**
     * Atributos que devem ser modificados(ler sobre Mutators no Laravel) para formato date.
     *
     * @var array
     */
    protected $dates = [
        'deleted_at'
    ];

}
