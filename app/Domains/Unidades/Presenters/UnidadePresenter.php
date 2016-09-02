<?php

namespace VCCon\Domains\Unidades\Presenters;

use VCCon\Support\Presenters\BasePresenter;
use Carbon\Carbon;


class UnidadePresenter extends BasePresenter
{

     /**
     * Formatação de data através do Carbon.
     * Formatação de máscaras
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
}