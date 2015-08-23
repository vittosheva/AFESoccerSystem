
@extends('layouts.back')

@section('content')

<div class="well-lg">
    <p>Bienvenido al panel de control: <?php echo Auth::user()->name; ?></p>
    <p><a href="{{ route('admin.logout.view') }}">Salir</a></p>
</div>

@endsection