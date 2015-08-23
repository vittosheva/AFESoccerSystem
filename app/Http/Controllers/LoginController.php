<?php

namespace MiTutorialDigital\Http\Controllers;

use MiTutorialDigital\Http\Controllers\Auth\AuthController;
use Illuminate\Http\Request;

use MiTutorialDigital\Http\Requests;
use MiTutorialDigital\Http\Controllers\Controller;

use MiTutorialDigital\Http\Requests\LoginRequest;
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
        return view('back.login')->with([
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
            'active' => 1,
        ];

        $this->authenticate($credentials, $request['remember']);

        return Redirect::back()
            ->withInput($request->except('password'))
            ->withErrors(['email' => 'No existe el usuario con las credenciales proporcionadas']);
    }


    /**
     * Handle an authentication attempt.
     *
     * @return Response
     */
    public function authenticate($credentials, $remember)
    {
        if (Auth::attempt($credentials, $remember)) {
            return redirect()->intended('admin/dashboard');
        }
    }




    /**
     * Show Register page
     */
    public function getRegister()
    {
        return view('back.register')->with([
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
        return view('back.forgotpassword')->with([
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
        return redirect()->route('admin.login.view');
    }

}
