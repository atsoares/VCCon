<?php

namespace VCCon\Domains\Reservas\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\AuditingTrait;
use Laracasts\Presenter\PresentableTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reserva extends Model
{
    use AuditingTrait;
    use PresentableTrait;
    use SoftDeletes;

    /**
     * Tabela que está associada com o model.
     *
     * @var string
     */
    protected $table = 'reservar_areas';

    /**
     * Arquivo para alteração de campos da view
     *
     * @var string
     */
    protected $presenter = \VCCon\Domains\Reservas\Presenters\ReservaPresenter::class;

    /**
     * Atributos da tabela que podem ser preenchidos.
     *
     * @var array
     */
    protected $fillable = [
        'condomino_id',
        'area_externa_id',
        'observacao',
        'horario_inicio',
        'horario_fim',
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
    public function areasExternas()
    {
        return $this->hasOne('VCCon\Domains\AreasExternas\Models\AreaExterna', 'id');
    }

    /**
     * Get the Condomino for the .
     * @return collection 
     */
    public function condominos()
    {
        return $this->hasOne('VCCon\Domains\Condominos\Models\Condomino', 'id');
    }

}