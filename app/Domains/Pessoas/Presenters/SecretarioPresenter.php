<?php

namespace Sgpweb\Domains\Pessoas\Presenters;

use Sgpweb\Support\Presenters\BasePresenter;
use Carbon\Carbon;


class SecretarioPresenter extends BasePresenter
{
     /**
     * Formatação de data através do Carbon.
     *
     * @var string
     */
    public function isAtivo()
    {
        $ativo = 'Sim';

        if($this->ativo == 'N')
        {
            $ativo = 'Não';
        }

        return $ativo;
    }

    public function emExercicio()
    {
        $secretario_exercicio = 'Sim';

        if($this->secretario_exercicio == 'N')
        {
            $secretario_exercicio = 'Não';
        }

        return $secretario_exercicio;
    }
}