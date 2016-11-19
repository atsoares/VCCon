<?php

namespace VCCon\Applications\App\Http\Controllers;

use Illuminate\Support\Arr;
use Illuminate\Foundation\Http\FormRequest;
use VCCon\Core\Http\Requests\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
}
