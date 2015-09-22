<!DOCTYPE html>
<html lang="en">
<head>
    @if(defined('title'))
    <title>{{ $title  or "IDONO" }}</title>
    @endif
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('head_extra')
</head>
<body>
    @include('templates.navbar')
	@yield('content')
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('script_extra')
</body>
</html>
