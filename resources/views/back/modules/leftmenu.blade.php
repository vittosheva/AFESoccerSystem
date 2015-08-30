<!-- Left navigation -->
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">

            </li>
            <li>
                <a href="{{ route('back.dashboard.index') }}">
                    <i class="fa fa-dashboard fa-fw"></i> Panel de control
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-list-ol fa-fw"></i> Pines<span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('back.pins.index') }}">Listado de pines</a>
                    </li>
                    <li>
                        <a href="{{ route('back.pins.create') }}">Crear PIN</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>

