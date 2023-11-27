<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="{{asset('css/style.css')}}">
     <title>Document</title>
     <style>
          .nom {
               font-size: 30px;
               color: blue;
          }
          a{
               text-decoration: none;
          }
     </style>
</head>
<body>
@extends('layouts.app')
    @section('content')
     <div class="cardBox">
          <div class="card">
               <div>
                    <?php $user = Auth::user()->id; ?>
                    <a href="{{route('user.edit',$user)}}">
                         <div class="numbers">{{ Auth::user()->prenom}}</div>
                         <div class="cardName">Modifier Profile</div>
                    </a>
               </div>
          </div>

          <div class="card">
               <div>
                    <a href="{{route('voyage.liste')}}">
                         <div class="numbers">20</div>
                         <div class="cardName">Reservation Billet</div>
                    </a>
               </div>

               <div class="iconBx">
                    <ion-icon name="cash"></ion-icon>
               </div>
          </div>

          <div class="card">
               <div>
                     <a href="{{route('locations.liste')}}">
                         <div class="numbers">10</div>
                         <div class="cardName">Demande Location</div>
                     </a>
               </div>

               <div class="iconBx">
                    <ion-icon name="bus-outline"></ion-icon>
               </div>
          </div>

          <div class="card">
               <div>
                    <a href="{{route('envoi.liste')}}">
                         <div class="numbers">12</div>
                         <div class="cardName">Envoi de Colis</div>
                    </a>
               </div>

               <div class="iconBx">
                    <ion-icon name="cash-outline"></ion-icon>
               </div>
          </div>
     </div>
     <div class="cardBox">
          <div class="card">
               <div>
                    <a href="{{route('message.index')}}">
                         <div class="numbers">50</div>
                         <div class="cardName">Messages</div>
                    </a>
               </div>

               <div class="iconBx">
                    <ion-icon name="chatbubbles-outline"></ion-icon>
               </div>
          </div>

          <div class="card">
               <div>
                    <a href="{{route('user.index')}}">
                         <div class="numbers">30</div>
                         <div class="cardName">Utilisateur Inscrit</div>
                    </a>
               </div>

               <div class="iconBx">
                    <ion-icon name="people-outline"></ion-icon>
               </div>
          </div>

          <div class="card">
               <div>
                    <a href="{{route('bus.liste')}}">
                         <div class="numbers">20</div>
                         <div class="cardName">Bus Enregistre</div>
                    </a>
               </div>

               <div class="iconBx">
                    <ion-icon name="car-outline"></ion-icon>
               </div>
          </div>

          <div class="card">
               <div>
                    <a href="{{route('planning.liste')}}">
                         <div class="numbers">/Jour</div>
                         <div class="cardName">Gestion de plannings</div>
                    </a>
               </div>

               <div class="iconBx">
                    <ion-icon name="calendar-outline"></ion-icon>
               </div>
          </div>
     </div>
     <div class="cardBox">
          <div class="card">
                    <div>
                         <a href="{{route('ligne.liste')}}">
                              <div class="numbers">15</div>
                              <div class="cardName">Lignes de Transport</div>
                         </a>
                    </div>

                    <div class="iconBx">
                         <ion-icon name="eye-outline"></ion-icon>
                    </div>
               </div>
               <div class="card">
                    <div>
                         <div class="numbers">Trajet</div>
                         <div class="cardName">Supervision de Trajets</div>
                    </div>

                    <div class="iconBx">
                         <ion-icon name="eye-outline"></ion-icon>
                    </div>
               </div>
     </div>
     <script src="{{asset('js/main.js')}}"></script>

     <!-- ====== ionicons ======= -->
     <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
     <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    @endsection
</body>
</html>