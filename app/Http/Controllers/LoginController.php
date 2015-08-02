<?php

namespace AfeSoccerSystem\Http\Controllers;

use Illuminate\Http\Request;

use AfeSoccerSystem\Http\Requests;
use AfeSoccerSystem\Http\Controllers\Controller;

use AfeSoccerSystem\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{

    /**
     * Show Login page
     */
    public function getIndex()
    {
        return view('front.login')->with([
            'title'     => 'Iniciar sesión' . $this->website,
            'keywords'  => 'afe, login, sistema afe'
        ]);
    }

    /**
     * Post Login page
     */
    public function postIndex(LoginRequest $request)
    {
        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
            return Redirect::to('admin');
        }

        return Redirect::to('login')->with([
            'title'     => 'Iniciar sesión' . $this->website,
            'keywords'  => 'afe, login, sistema afe'
        ])->withInput();
    }




    /**
     * Show Register page
     */
    public function getRegister()
    {
        return view('front.register')->with([
            'title'     => 'Registro' . $this->website,
            'keywords'  => 'afe, login, sistema afe'
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
            'keywords'  => 'afe, login, sistema afe'
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
