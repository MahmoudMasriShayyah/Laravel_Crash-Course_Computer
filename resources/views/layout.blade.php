<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- normalize -->
        <link rel="stylesheet" href="{{ url('css/normalize.css') }}">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ url('css/style.css') }}">

        <!-- bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">

    </head>
    <body class="antialiased">

        <div class="relative py-4 px-6 text-center">
            <nav>
                <a href="{{ route('home.index') }}">Index</a>
                <a href="{{ route('home.about') }}">about</a>
                <a href="{{ route('computers.index') }}">Computers</a>
                <a href="{{ route('home.contact') }}">contact</a>
            </nav>
        </div>

        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

            @yield('content')

        </div>
    </body>
</html>

