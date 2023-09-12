<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Document</title>
    <style>
     body {
          background-color: #dedede;
     }
          .cade {
               display: flex;
               gap: 72px;
          }
    </style>
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
                              <a href="" class="button">Modifier</a>
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
                              <a href="{{route('message.index')}}" class="button">voir</a>
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

                    <div class="cade">
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
                              <h4>Parametres</h4>
                              <p>bienvenue charo</p>
                              <a href="#" class="button">voir</a>
                         </div>
                    </div>
                </div>
        </div>
    @endsection
</body>
</html>

