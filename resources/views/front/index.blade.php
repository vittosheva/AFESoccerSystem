@extends('layouts.front')

@section('content')

    <div class="container">
        <div class="row">
            <div class="well-lg">
                <p><a href="{{ route('front.index') }}">Inicio</a></p>
                <p><a href="{{ route('login.getregister') }}">Login</a></p>
            </div>
        </div>
    </div>

@endsection