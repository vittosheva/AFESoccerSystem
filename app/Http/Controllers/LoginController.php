<?php

namespace AfeSoccerSystem\Http\Controllers;

use AfeSoccerSystem\Http\Controllers\Auth\AuthController;
use Illuminate\Http\Request;

use AfeSoccerSystem\Http\Requests;
use AfeSoccerSystem\Http\Controllers\Controller;

use AfeSoccerSystem\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Redirect;

use Auth;
use Illuminate\Support\Facades\Validator;

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
        $this->validate($request, $request->rules());

        $credentials = [
            'email' => $request['email'],
            'password' => $request['password'],
            'active' => 1
        ];

        if (Auth::attempt($credentials, $request->has('remember'))) {
            return redirect()->intended('admin');
        }

        return redirect('admin/login')->with([
            'title'     => 'Iniciar sesión' . $this->website,
            'keywords'  => 'afe, login, sistema afe'
        ])->withInput($request->only('email'))
          ->withErrors(['email' => 'No existe el usuario con las credenciales proporcionadas']);
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




    /**
     * Get Logout of admin
     */
    public function getLogout()
    {
        Auth::logout();
        return Redirect::to('/');
    }

}
