<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield("title")</title>

        {{-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css"> --}}
        <link rel="stylesheet" href="{{ asset('Backend/css/app.css') }}">

    </head>
    <body class="bg-white">
        <main>
            @yield("content")
        </main>

        <script src="{{ asset('Backend/js/jquery-3.3.1.js') }}"></script>
        <script src="{{ asset('Backend/js/bootstrap.js') }}"></script>
        <script src="{{ asset('Backend/js/nikkadmin.js') }}"></script>
    </body>
</html>
