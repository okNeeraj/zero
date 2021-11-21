<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield("title")</title>
        <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
        <link rel="stylesheet" href="{{ asset('Backend/css/app.css') }}">

    </head>
    <body>
        <header>
            @component ("Template.layouts.components.navbar") @endcomponent
        </header>

        <div class="adminLayout fixed-aside layout-fullF" id="exampleMainLayout" data-layout="fulhl">
            @component ("Template.layouts.components.aside") @endcomponent
            <main>
                @yield("content")
            </main>
        </div>

        <script src="{{ asset('Backend/js/jquery-3.3.1.js') }}"></script>
        <script src="{{ asset('Backend/js/popper.min.js') }}"></script>
        <script src="{{ asset('Backend/js/bootstrap.js') }}"></script>
        <script src="{{ asset('Backend/js/simplebar.js') }}"></script>
        <script src="{{ asset('Backend/js/nikkadmin.js') }}"></script>
    </body>
</html>
