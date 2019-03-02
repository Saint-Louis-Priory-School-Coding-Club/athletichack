
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.css" rel="stylesheet">
        <link href="{{asset('css/mattie.css')}}" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar">
            <div class="navbar-brand">
                <a class="navbar-item" href="/">Saluta</a>
                <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navMenu">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>
            <div class="navbar-menu" id="navMenu">
                @if (Auth::check())
                    <div class="navbar-start">
                        <a class="navbar-item" href="/">Home</a>
                        <a class="navbar-item" href="/leagues/create">Create League</a>
                    </div>
                @endif
                    <div class="navbar-end">
                        @if (Auth::check())
                            <a class="navbar-item" href="/logout">Logout</a>
                        @else
                            <a class="navbar-item" href="/login">Login</a>
                            <a class="navbar-item" href="/register">Register</a>
                        @endif
                    </div>
            </div>
        </nav>
        <div class="section">
            <div class="container">
                @yield('content')
            </div>
        </div>
    </body>
</html>
