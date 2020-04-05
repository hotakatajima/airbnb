<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Hotabnb</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand text-danger " href="{{ url('/') }}" style="font-size:24px;">
                    Hotabnb
                </a>
                <form action="" method="">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control mt-4 ml-3" placeholder="Anywhere">
                    </div>
                </form>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link btn btn-danger text-light mr-3" href="{{ route('login') }}">Become a host</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            @if (Auth::user()->status != 'host')
                                <li class="nav-item">
                                    <form action="{{ route('host', [ 'id' => Auth::user()->id ]) }}" method="post">
                                        @csrf
                                        @method('patch')
                                        <input type="submit" value="Become a host" class="nav-link btn btn-danger text-light mr-3">
                                    </form>
                                </li>
                            @else
                                <form action="{{ route('create_host',[ 'id' => Auth::user()->id ]) }}" method="post">
                                    @csrf
                                    <input type="submit" value="Create your place" class="nav-link btn btn-danger text-light mr-3">
                                </form>                                
                            @endif
                            <li class="nav-item">
                                <img src="/avatars/black.png" alt="" class="rounded-circle" style="width:40px; height:40px;">
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="">
                                       Manage Listing
                                    </a>
                                    <a class="dropdown-item" href="">
                                        List Your Space
                                    </a>
                                    <a class="dropdown-item" href="">
                                       Your Reservations
                                    </a>
                                    <a class="dropdown-item" href="">
                                        Your Trips
                                    </a>
                                    <hr class="m-1">
                                    <a class="dropdown-item" href="">
                                        Edit Profile
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
