@extends('layouts.front')

@section('content')

<div class="main-content">

    <div class="panel panel-form">
        <p class="success">Registro completo</p>
        <p class="text-center">
            <a href="{{ route('front.home.index') }}" class="btn button-send">Volver</a>
        </p>
    </div>

</div>

@endsection