<?php

namespace Sgpweb\Domains\Ufs\Presenters;

use Sgpweb\Support\Presenters\BasePresenter;
use Carbon\Carbon;


class UfPresenter extends BasePresenter
{   

     /**
     * Formatação de data através do Carbon.
     * Formatação de máscaras
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
    }*/

    public function isAtivo()
    {
        $ativo = 'Sim';

        if($this->ativo == 'N')
        {
            $ativo = 'Não';
        }

        return $ativo;
    }
}