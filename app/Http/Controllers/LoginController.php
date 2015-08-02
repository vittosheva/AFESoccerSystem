<?php

namespace AfeSoccerSystem\Http\Controllers;

use Illuminate\Http\Request;

use AfeSoccerSystem\Http\Requests;
use AfeSoccerSystem\Http\Controllers\Controller;

class LoginController extends Controller
{

    /**
     * Show Login page
     */
    public function getIndex()
    {
        return view('front.login')->with([
            'title'     => 'Iniciar sesión' . $this->website,
            'keywords'  => 'afe, login, sistema afe',
        ]);
    }

    /**
     * Post Login page
     */
    public function postIndex(Request $request)
    {
        return "postIndex";
    }




    /**
     * Show Register page
     */
    public function getRegister()
    {
        return view('front.register')->with([
            'title'     => 'Registro' . $this->website,
            'keywords'  => 'afe, login, sistema afe',
        ]);
    }

    /**
     * Post Login page
     */
    public function postRegister(Request $request)
    {
        return "postRegister";
    }




    /**
     * Show Forgot Password page
     */
    public function getForgotPassword()
    {
        return view('front.forgotpassword')->with([
            'title'     => 'Olvidó su contraseña' . $this->website,
            'keywords'  => 'afe, login, sistema afe',
        ]);
    }

    /**
     * Post Login page
     */
    public function postForgotPassword(Request $request)
    {
        return "postForgotPassword";
    }

}
