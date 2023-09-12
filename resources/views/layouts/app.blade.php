<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="dash">
        <div class="dash-head">
            <div class="logo">
                <center><img src="{{asset('image/logo.jpg')}}" width="150px" srcset=""></center>
            </div>
            <div class="container">
                    <div class="menu">
                        <ul class="item-ul">
                            <li><a href="{{route('home')}}" class="item-li">Tableau de bords</a></li>
                            <li><a href="{{route('user.index')}}" class="item-li">Modifer Profile</a></li>
                            <li><a href="{{route('user.index')}}" class="item-li">Reservation</a></li>
                            <li><a href="{{route('user.index')}}" class="item-li">Location de Bus</a></li>
                            <li><a href="{{route('user.index')}}" class="item-li">Envoi de Colis</a></li>
                            <li><a href="{{route('message.index')}}" class="item-li">Message</a></li>
                            <li><a href="{{route('user.index')}}" class="item-li">Gestion d'Utilidsteur</a></li>
                            <li><a href="{{route('user.index')}}" class="item-li">Gestion de Bus</a></li>
                            <li><a href="{{route('user.index')}}" class="item-li">Gestion plannings</a></li>
                            <li><a href="{{route('user.index')}}" class="item-li">Parametre</a></li>
                        </ul>
                    </div>
            </div>
        </div>

        <div class="">
            <div class="app">
                <div>
                    <a href="{{ url('/') }}" id="titre">
                        <h2 class="titre">Administration</h2>
                    </a>
                </div>

                <div class="" >
                    <ul class="dec">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->prenom }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end bg-rouge " aria-labelledby="navbarDropdown">
                                    <a class="dec" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Deconnexion') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
            <main class="py-4">
              @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
