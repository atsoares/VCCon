<?php

namespace Sgpweb\Domains\Processos\Presenters;

use Sgpweb\Support\Presenters\BasePresenter;
use Carbon\Carbon;

class TipoEntidadePresenter extends BasePresenter
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