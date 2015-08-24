@extends('layouts.back')

@section('content')

    <div class="row">

        <div class="col-lg-12">
            <h1 class="page-header">Pines</h1>
        </div>

        <div class="col-lg-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-list-ol fa-fw"></i> {{ $title }}
                </div>
                <div class="panel-body">
                    <div class="content">

                        {!! Form::open(['route' => 'admin.pins.store'], ['class' => 'form', 'autocomplete' => 'off']) !!}
                            <div class="form-group">
                                {!! Form::label('pin', 'PIN:', ['class' => 'control-label']) !!}
                                {!! Form::text('pin', null, ['class' => 'form-control', 'placeholder' => 'Ingresar PIN', 'required' => 'required', 'autofocus' => 'autofocus']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('id', 'ID:', ['class' => 'control-label']) !!}
                                {{ $next }}
                            </div>
                            {!! Form::submit('Crear nuevo PIN', ['class' => 'btn btn-primary']) !!}
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            @include('back.modules.search')
        </div>

    </div>

@endsection