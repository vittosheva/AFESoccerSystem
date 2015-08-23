<div class="panel panel-primary box effect2 login">

    <div class="panel-heading">
        <h3 class="panel-title text-center">Olvidó su contraseña</h3>
        <div class="btn-back-right">
            <a href="{{ route('forgotpassword.view') }}" title="Volver"><i class="fa fa-arrow-circle-left fa-2x"></i></a>
        </div>
    </div>

    {!! Form::open(['route' => 'forgotpassword.post', 'method' => 'POST', 'autocomplete' => 'off', 'role' => 'form']) !!}

    <div class="panel-body">
        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                @include('errors.errors')
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center forgot-box">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email', 'tabindex' => 1, 'required', 'autofocus']) !!}
                </div>
                @if (Config::get('settings.showRegister'))
                <p>¿No tiene cuenta? <a href="{{ route('register.view') }}">Regístrece</a></p>
                @endif
            </div>

        </div>
    </div>

    <div class="panel-footer">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-labeled btn-success" tabindex="2">
                    <span class="btn-label"><i class="glyphicon glyphicon-ok"></i></span>Ingresar
                </button>
            </div>
        </div>
    </div>

    {!! Form::close() !!}

</div>