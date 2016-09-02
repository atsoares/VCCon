<?php

namespace VCCon\Support\Presenters;

use Laracasts\Presenter\Presenter;
use Carbon\Carbon;

abstract class BasePresenter extends Presenter
{
    public function createdAt()
    {
        return Carbon::parse($this->created_at)->format('d/m/Y H:m:s');
    }

    public function updatedAt()
    {
        return Carbon::parse($this->updated_at)->diffForHumans();
    }
}