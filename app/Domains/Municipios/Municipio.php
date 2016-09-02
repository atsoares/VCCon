<?php

namespace Sgpweb\Domains\Municipios;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\AuditingTrait;
use Laracasts\Presenter\PresentableTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class Municipio extends Model
{
    use AuditingTrait;
    use PresentableTrait;
    use SoftDeletes;

    /**
     * Tabela que está associada com o model.
     *
     * @var string
     */
    protected $table = 'municipios';

    /**
     * Arquivo para alteração de campos da view
     * 
     * @var string
     */
    protected $presenter = \Sgpweb\Domains\Municipios\Presenters\MunicipiosPresenter::class;

    /**
     * Atributos da tabela que podem ser preenchidos.
     *
     * @var array
     */
    protected $fillable = [
        'ufs_id',
        'nome',
        'sigla',
        'codigo_tcm',
        'codigo_ibge',
        'codigo_geonames',
        'cep',
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
    
    
    
    
}
