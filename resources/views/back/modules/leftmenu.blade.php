<!-- Left navigation -->
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">

                {!! Form::open(['route' => 'admin.pins.show', 'method' => 'get', 'class' => 'form', 'autocomplete' => 'off', 'role' => 'form']) !!}
                    <div class="input-group custom-search-form">
                        {!! Form::text('pin', null, ['class' => 'form-control', 'placeholder' => 'Buscar...', 'required' => 'required']) !!}
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="submit" title="Buscar">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                    </div>
                {!! Form::close() !!}

            </li>
            <li>
                <a href="{{ route('admin.dashboard.view') }}">
                    <i class="fa fa-dashboard fa-fw"></i> Panel de control
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-list-ol fa-fw"></i> Pines<span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('admin.pins.index') }}">Listado de pines</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.pins.create') }}">Crear PIN</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>

