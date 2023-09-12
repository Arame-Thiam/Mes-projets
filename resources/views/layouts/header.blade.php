<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('scss/head.css')}}">
    <title>Document</title>
</head>
<body>
    <div>
    <header class="className">
         <div class="container">
             <div class="head">
                <div class="logo">
                    <img src="{{asset('image/logos.png')}}" width='100px' height='60px'>
                </div>
                <div class="liens"> 
                    <ul class='item-liens'>
                      <li><a href="/" rel="stylesheet" class='item'>Reservation</a></li>
                      <li><a href="/location" rel="stylesheet" class='item'>Location</a></li>
                      <li><a href="/envoi" rel="stylesheet" class='item'>Envoi colis</a></li>
                      <li><a href="/apropos" rel="stylesheet" class='item'>A Propos</a></li>
                      <li><a href="/contact" rel="stylesheet" class='item'>Contact</a></li>
                    </ul>
                </div>
                <div>
                <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <div class='syteme'>
                                        <div><a href="{{route('login')}}" class="button">Connexion</a></div>
                                        <div><a href="{{route('register')}}" class='button'>Inscription</a></div>
                                    </div>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                    <a class='button' href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Deconnexion') }}
                                    </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                   

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
             </div>
         </div>
    </header>
           <main>
              @yield('content')
            </main>
    </div>
           
</body>
</html>