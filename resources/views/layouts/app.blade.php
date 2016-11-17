<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.css">
{{--<!-- Styles -->--}}
    <link href="/css/style.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body bgcolor="#e0f2f1">
    <div id="app">
        <!-- Dropdown Structure -->
        <ul id="dropdown1" class="dropdown-content">
            <li>
                <a href="{{ url('/logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
            <li><a href="#!">Mon profil</a></li>
        </ul>
        <nav>
            <div class="nav-wrapper teal lighten-2">
                <a href="{{ url('/home') }}" class="brand-logo"><!--<img src="http://dev.gbata.ci/public/img/log.png" alt=""></a>-->GBATA
                <ul class="right hide-on-med-and-down">
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li><a href="{{ url('/offers/create') }}">Publier une annonce</a></li>
                        <li><a href="{{ url('/offers') }}">Voir mes annonces</a></li>
                        <!-- Dropdown Trigger -->
                        <li><a class="dropdown-button1" href="#!" data-activates="dropdown1">{{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i></a></li>
                    @endif
                </ul>

                <!-- Mobile -->
                <ul class="side-nav" id="slide-out">
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li><a href="{{ url('/offers/create') }}">Publier une annonce</a></li>
                        <li><a href="{{ url('/offers') }}">Voir mes annonces</a></li>
                        <!-- Dropdown Trigger -->
                        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">{{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i></a></li>
                    @endif
                </ul>
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
            </div>
        </nav>
        @yield('content')
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>

    {{--<!-- Scripts -->--}}
    <script src="/js/script.js"></script>
    <script>
        $( document ).ready(function(){

        })
    </script>
</body>
</html>
