<?php

namespace AfeSoccerSystem\Http\Controllers;

use Illuminate\Http\Request;

use AfeSoccerSystem\Http\Requests;
use AfeSoccerSystem\Http\Controllers\Controller;

use Auth;
use Redirect;

class AdminController extends Controller
{

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
