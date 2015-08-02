<div class="panel panel-primary box effect2">

    <div class="panel-heading">
        <h3 class="panel-title text-center">Registrar</h3>
        <div class="btn-back-right">
            <a href="{{ route('login.index') }}" title="Volver"><i class="fa fa-arrow-circle-left fa-2x"></i></a>
        </div>
    </div>

    {!! Form::open(['route' => 'login.store', 'method' => 'POST', 'autocomplete' => 'off', 'role' => 'form']) !!}

    <div class="panel-body">
        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                @include('errors.errors')
            </div>

            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 register-box">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombres y Apellidos', 'tabindex' => 1, 'required', 'autofocus']) !!}
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Correo electrónico', 'tabindex' => 2, 'required']) !!}
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    {!! Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Usuario', 'tabindex' => 3, 'required']) !!}
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Contraseña', 'tabindex' => 4, 'required']) !!}
                </div>
            </div>

        </div>
    </div>

    <div class="panel-footer">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-labeled btn-success" tabindex="5">
                    <span class="btn-label"><i class="glyphicon glyphicon-ok"></i></span>Ingresar
                </button>
                <button type="reset" class="btn btn-labeled btn-danger" tabindex="6">
                    <span class="btn-label"><i class="glyphicon glyphicon-remove"></i></span>Limpiar
                </button>
            </div>
        </div>
    </div>

    {!! Form::close() !!}

</div>