<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @extends('layouts.app')
    @section('content')
        <div class="container">
                <div>
                    <div class="bord">
                         <div class="codre">
                              <h4>Profile</h4>
                              <p>{{ Auth::user()->prenom }}</p>
                              <a href="#" class="button">Modifier</a>
                         </div>
                         <div class="codre">
                              <h4>Reservation</h4>
                              <p>bienvenue charo</p>
                              <a href="" class="button">voir</a>
                         </div>
                         <div class="codre">
                              <h4>Lcation Bus</h4>
                              <p>bienvenue charo</p>
                              <a href="" class="button">voir</a>
                         </div>
                         <div class="codre">
                              <h4>Envoi de Colis</h4>
                              <p>bienvenue charo</p>
                              <a href="" class="button">voir</a>
                         </div>
                    </div>

                    <div class="bord">
                         <div class="codre">
                              <h4>Message</h4>
                              <p>bienvenue charo</p>
                              <a href="" class="button">voir</a>
                         </div>
                         <div class="codre">
                              <h4>Admin</h4>
                              <p>bienvenue charo</p>
                              <a href="" class="button">voir</a>
                         </div>
                         <div class="codre">
                              <h4>Gestion de Bus</h4>
                              <p>bienvenue charo</p>
                              <a href="{{route('bus.liste')}}" class="button">voir</a>
                         </div>
                         <div class="codre">
                              <h4>Utilisateur</h4>
                              <p>bienvenue charo</p>
                              <a href="{{route('user.index')}}" class="button">voir</a>
                         </div>
                    </div>

                    <div class="bord">
                         <div class="codre">
                              <h4>Plannings</h4>
                              <p>bienvenue charo</p>
                              <a href="" class="button">voir</a>
                         </div>
                         <div class="codre">
                              <h4>Lignes</h4>
                              <p>bienvenue charo</p>
                              <a href="{{route('ligne.liste')}}" class="button">voir</a>
                         </div>
                         <div class="codre">
                              <h4>nada</h4>
                              <p>bienvenue charo</p>
                              <a href="#" class="button">voir</a>
                         </div>
                    </div>
                </div>
        </div>
    @endsection
</body>
</html>

