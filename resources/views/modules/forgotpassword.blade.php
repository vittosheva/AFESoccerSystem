<div class="panel panel-primary box effect2">

    <div class="panel-heading">
        <h3 class="panel-title text-center">Olvidó su contraseña</h3>
        <div class="btn-back-right">
            <a href="{{ url('login') }}" title="Volver"><i class="fa fa-arrow-circle-left fa-2x"></i></a>
        </div>
    </div>

    {!! Form::open(['url' => 'login/forgot-password', 'method' => 'POST', 'autocomplete' => 'off', 'role' => 'form']) !!}

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
                <p>¿No tiene cuenta? <a href="{{ url('login/register') }}">Regístrece</a></p>
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