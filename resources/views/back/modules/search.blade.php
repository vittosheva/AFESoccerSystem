<div class="panel panel-default">

    <div class="panel-heading">
        <i class="fa fa-search fa-fw"></i> Buscador
    </div>

    <div class="panel-body">

        {!! Form::open(['route' => 'back.pins.show', 'method' => 'get', 'class' => 'form', 'autocomplete' => 'off', 'role' => 'form']) !!}
            <div class="input-group custom-search-form">
                {!! Form::text('pin', null, ['class' => 'form-control', 'placeholder' => 'Buscar...', 'required' => 'required']) !!}
                <span class="input-group-btn">
                    <button class="btn btn-default" type="submit" title="Buscar">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        {!! Form::close() !!}

    </div>
</div>