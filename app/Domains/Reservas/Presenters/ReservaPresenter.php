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

    public function dataInicio()
    {
        return Carbon::parse($this->horario_inicio)->format('d/m/Y');
    }

    public function dataFim()
    {
        return Carbon::parse($this->horario_fim)->format('d/m/Y');
    }

    public function horaInicio()
    {
        return Carbon::parse($this->horario_inicio)->format('H:i');
    }

    public function horaFim()
    {
        return Carbon::parse($this->horario_fim)->format('H:i');
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