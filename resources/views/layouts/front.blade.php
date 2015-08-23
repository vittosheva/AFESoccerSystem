<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="{{ $keywords }}" />
    <meta name="author" content="{{ Config::get('settings.author') }}">
    @include('layouts.header.styles')
</head>
<body id="front">

    <div class="bgcover2">
        @yield('content')
    </div>
    @include('layouts.footer.scripts')

</body>
</html>