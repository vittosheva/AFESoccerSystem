@extends('layouts.front')

@section('content')

    <div class="container">
        <div class="row">
            <div class="well-lg">
                <p><a href="{{ url('/') }}">Inicio</a></p>
                <p><a href="{{ url('login') }}">Iniciar Sesión</a></p>
                <p><a href="{{ url('login/forgot-password') }}">Olvidó su contraseña</a></p>
                <p><a href="{{ url('login/register') }}">Registrarse</a></p>
            </div>
        </div>
    </div>

@endsection