<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- <title>@yield("title")</title> --}}
        <title>Laravel React | Zero</title>
        <link rel="stylesheet" href="{{ mix('Frontend/react/css/app.css') }}">
    </head>
    <body>
        <div id="user"></div>
        <script src="{{ mix('Frontend/react/app.js') }}"></script>
    </body>
</html>
