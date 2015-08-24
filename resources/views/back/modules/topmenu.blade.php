    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ route('admin.dashboard.view') }}">{{ Config::get('settings.website') }} :: Administración</a>
    </div>

    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> {{ Auth::user()->name }} <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="#"><i class="fa fa-user fa-fw"></i> Perfil del usuario</a></li>
                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Configuraciones</a></li>
                <li class="divider"></li>
                <li><a href="{{ route('admin.logout.view') }}"><i class="fa fa-sign-out fa-fw"></i> Salir</a>
                </li>
            </ul>
        </li>
    </ul>
