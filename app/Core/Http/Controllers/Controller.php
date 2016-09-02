<?php

namespace VCCon\Core\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    protected $viewNamespace = '';

    protected function view($view = null, $data = [], $mergeData = [])
    {
    	if(!empty($this->viewNamespace) && !str_contains($view, '::'))
    	{
    		$view = $this->viewNamespace . $view;
    	}
    	
    	return view($view, $data, $mergeData);
    }
}
