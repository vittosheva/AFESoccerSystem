<div class="panel panel-primary box effect2 login">

    <div class="panel-heading">
        <h3 class="panel-title text-center">Iniciar Sesión</h3>
    </div>

    {!! Form::open(['route' => 'login.post', 'method' => 'POST', 'autocomplete' => 'off', 'role' => 'form']) !!}

        <div class="panel-body">
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12">
                    @include('errors.errors')
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 separator login-box">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email', 'tabindex' => 1, 'autofocus', 'required']) !!}
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Contraseña', 'tabindex' => 2, 'required']) !!}
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember" value="Remember" tabindex="3">
                            Recordarme
                        </label>
                    </div>
                    <p><a href="{{ route('admin.forgotpassword.view') }}">¿Olvidó su contraseña?</a></p>
                </div>

            </div>
        </div>

        <div class="panel-footer">
            <div class="row">

                @if (Config::get('settings.showRegister'))
                <div class="col-xs-12 col-sm-6 col-md-6">
                @else
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                @endif
                    <button type="submit" class="btn btn-labeled btn-success" tabindex="4">
                        <span class="btn-label"><i class="glyphicon glyphicon-ok"></i></span>Ingresar
                    </button>
                </div>

                @if (Config::get('settings.showRegister'))
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <p>¿No tiene cuenta? <a href="{{ url('login/register') }}">Regístrece</a></p>
                </div>
                @endif

            </div>
        </div>

    {!! Form::close() !!}

</div>