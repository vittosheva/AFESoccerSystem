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
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Get to admin index
     */
    public function getIndex()
    {
        return view('back.index')->with([
            'title'     => 'Panel de control' . $this->website,
            'keywords'  => 'afe, login, sistema afe'
        ]);
    }

}
