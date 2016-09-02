<?php

namespace Sgpweb\Domains\LrfProcessos\Presenters;

use Sgpweb\Support\Presenters\BasePresenter;
use Carbon\Carbon;

class LrfDataPresenter extends BasePresenter
{
    public function dataLimite()
    {
        return Carbon::parse($this->data_limite)->format('d/m/Y');
    }

    public function dataPublicacao()
    {
        return Carbon::parse($this->data_publicacao)->format('d/m/Y');
    }
}