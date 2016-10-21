<?php

namespace VCCon\Domains\Reservas\Presenters;

use VCCon\Support\Presenters\BasePresenter;
use Carbon\Carbon;


class ReservaPresenter extends BasePresenter
{

     /**
     * Formatação de data através do Carbon.
     * Formatação de máscaras
     *
     * @var string
     */

    public function dataTimeInicio()
    {
        return Carbon::parse($this->horario_inicio)->format('d/m/Y H:i:s');
    }

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