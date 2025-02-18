<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autók</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery-3.7.1.js') }}"></script>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fontawesome/css/all.css') }}" >
    <link rel="stylesheet" href="{{ asset('style.css') }}">


    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">
</head>

<body>
    <header>
        <div class="row">
            <img src="{{ asset('img/yellow_camaro.png') }}" alt="logo" width="175" height="100">
            <nav> 
                    <button><a href="{{ route('makers.index') }}">Gyártók</a></button>
                    <button><a href="{{ route('bodies.index') }}">Karosszériák</a></button>
                    <button><a href="{{ route('fuels.index') }}">Üzemanyagok</a></button>
                    <button><a href="{{ route('models.index') }}">Modellek</a></button>
            </nav>
        </div>
    </header>
    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; Király Gábor - 2025</p>
    </footer>

</body>

</html>
