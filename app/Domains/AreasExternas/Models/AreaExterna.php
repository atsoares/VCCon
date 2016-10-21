<?php

namespace VCCon\Domains\AreasExternas\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\AuditingTrait;
use Laracasts\Presenter\PresentableTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class AreaExterna extends Model
{
    use AuditingTrait;
    use PresentableTrait;
    use SoftDeletes;

    /**
     * Tabela que está associada com o model.
     *
     * @var string
     */
    protected $table = 'areas_externas';

    /**
     * Arquivo para alteração de campos da view
     *
     * @var string
     */
    protected $presenter = \VCCon\Domains\AreasExternas\Presenters\AreaExternaPresenter::class;

    /**
     * Atributos da tabela que podem ser preenchidos.
     *
     * @var array
     */
    protected $fillable = [
        'nome',
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
    public function reservas()
    {
        return $this->hasMany('VCCon\Domains\Reservas\Models\Reserva', 'area_externa_id');
    }
}
