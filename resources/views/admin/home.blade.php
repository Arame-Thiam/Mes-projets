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
          .flex {
               display: flex;
               justify-content: space-between;
               padding: 32px;
               align-items: center;
          }
          .input {
               padding: 16px;
               width: 70%;
               background: gainsboro;
               border: 1px solid gainsboro;
               border-radius:  8px 0 0 8px;
               border-left: 5px solid #2a2185;
              
           }
               .btn {
               background-color: #2a2185;
               border: 1px solid #2a2185;
               text-align: center;
               font-family: Inter, system-ui, Avenir, Helvetica, Arial, sans-serif;
               font-size: 12px;
               font-style: normal;
               font-weight: 700;
               cursor: pointer;
               padding: 16px;
               color: white;
               border-radius: 0 8px 8px 0;
          }
               .titre {
               color: #2a2185;
               font-size: 30px;
               font-family: Inter, system-ui, Avenir, Helvetica, Arial, sans-serif; 
          }
     </style>
</head>
<body>
@extends('layouts.app')
    @section('content')

          <div class="flex">
                <div class="search">
                    <form action="/chauffeur/index" method='get'>
                        @method('get')
                        <input type="text" name="search" value="{{ request()->get('search') }}" class="input" placeholder="rechercher ici">
                        <button type="submit" class="btn">Chercher</button>
                    </form>
                </div>
                <div class="espace">
                    <h2 class="titre">ESPACE ADMINISTRATIF</h2>
                </div>
          </div>

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