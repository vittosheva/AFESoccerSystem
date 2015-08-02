<div class="panel panel-primary box effect2">

    <div class="panel-heading">
        <h3 class="panel-title text-center">Iniciar Sesión</h3>
    </div>

    {!! Form::open(['route' => 'login.postlogin', 'method' => 'POST', 'autocomplete' => 'off', 'role' => 'form']) !!}

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
                            <input type="checkbox" value="Remember" tabindex="3">
                            Recordarme
                        </label>
                    </div>
                    <p><a href="{{ route('login.forgotpassword') }}">¿Olvidó su contraseña?</a></p>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 social-login-box">
                    <p>
                        <a href="http://www.asofutbolistasecuador.com/" class="btn btn-success btn-block" target="_blank" role="button">Página Web</a>
                        <br />
                        <a href="https://www.facebook.com/pages/Asociaci%C3%B3n-de-Futbolistas-del-Ecuador/611328112239696" class="btn facebook btn-block" target="_blank" role="button">AFE en Facebook</a>
                        <br />
                        <a href="https://twitter.com/EcuadorAFE" class="btn twitter btn-block" target="_blank" role="button">AFE en Twitter</a>
                    </p>
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
                    <p>¿No tiene cuenta? <a href="{{ route('login.create') }}">Regístrece</a></p>
                </div>
                @endif

            </div>
        </div>

    {!! Form::close() !!}

</div>