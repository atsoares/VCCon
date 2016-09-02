<?php

namespace Sgpweb\Domains\Pessoas\Presenters;

use Sgpweb\Support\Presenters\BasePresenter;
use Carbon\Carbon;


class RelatorPresenter extends BasePresenter
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
}