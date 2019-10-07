<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.theme.head')
</head>
<body>
    @yield('content')
    @include('layouts.theme.footer')
</body>

</html>