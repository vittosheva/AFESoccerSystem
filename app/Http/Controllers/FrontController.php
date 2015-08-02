<?php

namespace AfeSoccerSystem\Http\Controllers;

use Illuminate\Http\Request;

use AfeSoccerSystem\Http\Requests;
use AfeSoccerSystem\Http\Controllers\Controller;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.index')->with([
            'title'     => 'Inicio' . $this->website,
            'keywords'  => 'afe, login, sistema afe, afe system, soccer system, php, laravel'
        ]);
    }
}
