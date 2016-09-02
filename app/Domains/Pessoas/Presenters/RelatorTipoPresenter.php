<?php

namespace Sgpweb\Domains\Pessoas\Presenters;

use Sgpweb\Support\Presenters\BasePresenter;
use Carbon\Carbon;

class RelatorTipoPresenter extends BasePresenter
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