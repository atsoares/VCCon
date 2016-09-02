<?php

namespace Sgpweb\Domains\Municipios\Presenters;

use Sgpweb\Support\Presenters\BasePresenter;
use Carbon\Carbon;


class MunicipioPresenter extends BasePresenter
{   

     /**
     * Formatação de data através do Carbon.
     *
     * @var string
    
    public function dataNomeacao()
    {
        return Carbon::parse($this->data_nomeacao)->format('d/m/Y');
    }

    public function dataPosse()
    {
        return Carbon::parse($this->data_posse)->format('d/m/Y');
    }

    public function dataSaida()
    {
        return Carbon::parse($this->data_saida)->format('d/m/Y');
    } */
}