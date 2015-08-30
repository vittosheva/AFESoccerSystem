<?php

namespace MiTutorialDigital\Http\Controllers;

use Illuminate\Http\Request;

use MiTutorialDigital\Http\Requests;
use MiTutorialDigital\Http\Controllers\Controller;

use Auth;
use Redirect;

class AdminController extends Controller
{

    /**
     * Get to admin index
     */
    public function index()
    {
        return view('back.index')->with([
            'title'     => 'Panel de control',
            'keywords'  => 'mi tutorial digital, tutorias digitales, panel de control, administracion'
        ]);
    }

}
