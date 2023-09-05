<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                      <li><a to="/reservation" rel="stylesheet" class='item'>Reservation</a></li>
                      <li><a to="/location" rel="stylesheet" class='item'>Location</a></li>
                      <li><a to="/envoi_colis" rel="stylesheet" class='item'>Envoi colis</a></li>
                      <li><a to="/a_propos" rel="stylesheet" class='item'>A Propos</a></li>
                      <li><a to="/contact" rel="stylesheet" class='item'>Contact</a></li>
                    </ul>
                </div>
                <div>
                <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <div class='syteme'>
                                        <div><a href="{{route('login')}}" class="button">Login</a></div>
                                        <div><a href="{{route('register')}}" class='button'>Register</a></div>
                                    </div>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                    <a class="deconnexion" href="{{ route('logout') }}"
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