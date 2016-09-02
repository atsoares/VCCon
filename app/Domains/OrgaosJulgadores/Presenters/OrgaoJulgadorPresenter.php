<?php

namespace Sgpweb\Domains\OrgaosJulgadores\Presenters;

use Sgpweb\Support\Presenters\BasePresenter;
use Carbon\Carbon;

class OrgaoJulgadorPresenter extends BasePresenter
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