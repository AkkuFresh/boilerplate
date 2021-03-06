<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title }} | {{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/boilerplate.min.css') }}">
    @stack('css')
</head>
<body class="{{ $bodyClass ?? 'login-page'}}">
    @yield('content')
    <script src="{{ asset('js/boilerplate.min.js') }}"></script>
    @stack('js')
</body>
</html>