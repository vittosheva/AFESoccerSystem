<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="{{ $keywords }}" />
    <meta name="author" content="{{ Config::get('settings.author') }}">
    @include('layouts.header.admin_styles')
</head>
<body id="admin">

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            @include('back.modules.topmenu')
            @include('back.modules.leftmenu')
        </nav>

        <!-- Page-wrapper -->
        <div id="page-wrapper">
            @include('errors.admin_errors')
            @yield('content')
        </div>

    </div>

    @include('layouts.footer.admin_scripts')

</body>
</html>