<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/stylee.css')}}">
    <title>Responsive Admin Dashboard | Korsat X Parmaga</title>
    <style>
          .ico {
            color: white;
            font-size: 30px;
            text-style: none;
          }
    </style>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .nil {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

    </style>
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <div class="nil">
                        <div>
                                <a href="#">
                                    <span class="icon">
                                        <ion-icon name="Person"></ion-icon>
                                    </span>
                                    <span class="title">{{ Auth::user()->prenom}}</span>
                                </a>
                        </div>
                        <div>
                                    <a class="dec" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <span class="icon">
                                           
                                         </span>
                                    </a>
                        </div>
                    </div>
                </li>

                <li>
                    <a href="{{route('home')}}">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Tableau de bord</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="person-outline"></ion-icon>
                        </span>
                        <span class="title">Modifier Profile</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('voyage.liste')}}">
                        <span class="icon">
                            <ion-icon name="cash"></ion-icon>
                        </span>
                        <span class="title">Reservation</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('locations.liste')}}">
                        <span class="icon">
                            <ion-icon name="bus-outline"></ion-icon>
                        </span>
                        <span class="title">Location de Bus</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('envoi.liste')}}">
                        <span class="icon">
                            <ion-icon name="cash-outline"></ion-icon>
                        </span>
                        <span class="title">Envoi de Colis</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('ligne.liste')}}">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Ligne Transport</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('user.index')}}">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Gestion Utilidsteur</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('bus.liste')}}">
                        <span class="icon">
                            <ion-icon name="car"></ion-icon>
                        </span>
                        <span class="title">Gestion de Bus</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('planning.liste')}}">
                        <span class="icon">
                            <ion-icon name="calendar-outline"></ion-icon>
                        </span>
                        <span class="title">Gestion plannings</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="icon">
                <div class="icon" >
                    <ul class="icon">
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
                                <div class="icon " aria-labelledby="navbarDropdown">
                                    <a class="dec" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                         <ion-icon name="log-out-outline" class="ico"></ion-icon>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                        @endguest
                    </ul>
                </div>
                </div>
            </div>
            <main>
              @yield('content')
            </main>
            
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="{{asset('js/main.js')}}"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>