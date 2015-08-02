<?php

namespace AfeSoccerSystem\Http\Controllers;

use Illuminate\Http\Request;

use AfeSoccerSystem\Http\Requests;
use AfeSoccerSystem\Http\Controllers\Controller;

class AdminController extends Controller
{

    public function getIndex()
    {
        return "Bienvenido al panel de control";
    }

}
