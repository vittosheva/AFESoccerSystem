<div class="logo">
    <a href="{{ route('front.home.index') }}" title="{{ $title }}"></a>
</div>
<div class="panel panel-form">

    {!! Form::open(['route' => 'front.registerplan.store', 'method' => 'POST', 'autocomplete' => 'off', 'role' => 'form', 'class' => 'form-horizontal', 'id' => 'form-register']) !!}

        <fieldset>

            @if (count($errors) > 0 && Config::get('settings.positionError') == 'top')
            <div class="alert alert-danger alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            @if($errors->has('pin_code') && Config::get('settings.positionError') == 'inside')
                <?php $insidePinError = $errors->first('pin_code'); $errorPin = ' error'; ?>
            @else
                <?php $insidePinError = ''; $errorPin = ''; ?>
            @endif

            @if($errors->has('name') && Config::get('settings.positionError') == 'inside')
                <?php $insideNameError = $errors->first('name'); $errorName = ' error'; ?>
            @else
                <?php $insideNameError = ''; $errorName = ''; ?>
            @endif

            @if($errors->has('course_id') && Config::get('settings.positionError') == 'inside')
                <?php $insideCourseError = $errors->first('course_id'); $errorCourse = ' error'; ?>
            @else
                <?php $insideCourseError = ''; $errorCourse = ''; ?>
            @endif

            @if($errors->has('subject_id') && Config::get('settings.positionError') == 'inside')
                <?php $insideSubjectError = $errors->first('subject_id'); $errorSubject = ' error'; ?>
            @else
                <?php $insideSubjectError = ''; $errorSubject = ''; ?>
            @endif

            @if($errors->has('email') && Config::get('settings.positionError') == 'inside')
                <?php $insideEmailError = $errors->first('email'); $errorEmail = ' error'; ?>
            @else
                <?php $insideEmailError = ''; $errorEmail = ''; ?>
            @endif

            @if($errors->has('password') && Config::get('settings.positionError') == 'inside')
                <?php $insidePassError = $errors->first('password'); $errorPass = ' error'; ?>
            @else
                <?php $insidePassError = ''; $errorPass = ''; ?>
            @endif

            <div class="form-group text-center{{ $errorPin }}">
                {!! Form::label('pin_code', 'TU PIN', ['class' => 'col-xs-6 col-xs-offset-3 text-center']) !!}
                <div class="col-xs-6 col-xs-offset-3">
                    {!! Form::text('pin_code', null, ['class' => 'form-control required', 'tabindex' => 1, 'autofocus', 'required', 'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => $insidePinError]) !!}
                    @if ($errors->has('pin_code') && Config::get('settings.positionError') == 'bottom')<p class="alert-danger">{!! $errors->first('pin_code') !!}</p>@endif
                </div>
            </div>

            <div class="form-group{{ $errorName }}">
                {!! Form::label('name', 'NOMBRE', ['class' => 'control-label col-xs-4']) !!}
                <div class="col-xs-8">
                    {!! Form::text('name', null, ['class' => 'form-control required', 'tabindex' => 2, 'required', 'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => $insideNameError]) !!}
                    @if ($errors->has('name') && Config::get('settings.positionError') == 'bottom')<p class="alert-danger">{!! $errors->first('name') !!}</p>@endif
                </div>
            </div>

            <div class="form-group{{ $errorCourse }}">
                {!! Form::label('course_id', 'CURSO', ['class' => 'control-label col-xs-4']) !!}
                <div class="col-xs-8">
                    {!! Form::select('course_id', $courses, null, ['class' => 'form-control', 'tabindex' => 3, 'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => $insideCourseError]) !!}
                    @if ($errors->has('course_id') && Config::get('settings.positionError') == 'bottom')<p class="alert-danger">{!! $errors->first('course_id') !!}</p>@endif
                </div>
            </div>

            <div class="form-group{{ $errorSubject }}">
                {!! Form::label('subject_id', 'MATERIA', ['class' => 'control-label col-xs-4']) !!}
                <div class="col-xs-8">
                    {!! Form::select('subject_id', $subjects, null, ['class' => 'form-control', 'tabindex' => 4, 'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => $insideSubjectError]) !!}
                    @if ($errors->has('subject_id') && Config::get('settings.positionError') == 'bottom')<p class="alert-danger">{!! $errors->first('subject_id') !!}</p>@endif
                </div>
            </div>

            <div class="form-group{{ $errorEmail }}">
                {!! Form::label('email', 'CORREO', ['class' => 'control-label col-xs-4']) !!}
                <div class="col-xs-8">
                    {!! Form::email('email', null, ['class' => 'form-control', 'tabindex' => 5, 'required', 'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => $insideEmailError]) !!}
                    @if ($errors->has('email') && Config::get('settings.positionError') == 'bottom')<p class="alert-danger">{!! $errors->first('email') !!}</p>@endif
                </div>
            </div>

            <div class="form-group{{ $errorPass }}">
                {!! Form::label('password', 'CONTRASEÑA', ['class' => 'control-label col-xs-4']) !!}
                <div class="col-xs-8">
                    {!! Form::password('password', ['class' => 'form-control', 'tabindex' => 6, 'required', 'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => $insidePassError]) !!}
                    @if ($errors->has('password') && Config::get('settings.positionError') == 'bottom')<p class="alert-danger">{!! $errors->first('password') !!}</p>@endif
                </div>
            </div>

            <div class="form-group">
                <div class="controls col-md-6 col-xs-offset-5">
                    <div class="row">
                        {!! Form::submit('Enviar', ['class' => 'btn button-send', 'tabindex' => 7]) !!}
                    </div>
                </div>
            </div>

            @if (count($errors) > 0 && Config::get('settings.positionError') == 'inside')
                <div class="alert alert-danger alert-dismissible fade in text-center" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <p>Por favor corriga los errores</p>
                </div>
            @endif

        </fieldset>

    {!! Form::close() !!}

</div>