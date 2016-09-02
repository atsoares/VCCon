<?php

namespace Sgpweb\Domains\LrfProcessos\Presenters;

use Sgpweb\Support\Presenters\BasePresenter;

class LrfPeriodoPresenter extends BasePresenter
{
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