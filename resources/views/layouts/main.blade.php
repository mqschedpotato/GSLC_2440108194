<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="stylesheet" href="{{ url(asset('css/style.css')) }}"> --}}
    @yield('css')

    {{-- CDN Bulma --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>@yield('title')</title>
</head>
<body>
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <div class="navbar-item" href="#">
                {{-- <img class="navbar-logo" src="{{ asset('pics/logo_binus.png') }}" width="100%" height="100%" alt="Binus Logo"> --}}
                <strong>WEB PROG</strong>
            </div>
        </div>

        <div class="navbar-menu">
            <div class="navbar-end">
                <div class="navbar-item">
                    <a class="button is-link is-rounded is-hovered is-size-7" href="{{ route('home') }}">
                        Homepage
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <main class="is-flex container is-fluid">
        @yield('main_content')
    </main>
    <footer>
        <div class="has-text-centered">
            <p>
                Copyrights 2023
            </p>
        </div>
    </footer>
</body>
</html>
