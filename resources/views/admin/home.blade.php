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
                    <div class="numbers">{{ Auth::user()->prenom}}</div>
                    <div class="cardName">Modifier Profile</div>
               </div>
          </div>

          <div class="card">
               <div>
                    <div class="numbers">80</div>
                    <div class="cardName">Reservation</div>
               </div>

               <div class="iconBx">
                    <ion-icon name="cash"></ion-icon>
               </div>
          </div>

          <div class="card">
               <div>
                    <div class="numbers">284</div>
                    <div class="cardName">Location Bus</div>
               </div>

               <div class="iconBx">
                    <ion-icon name="bus-outline"></ion-icon>
               </div>
          </div>

          <div class="card">
               <div>
                    <div class="numbers">$7,842</div>
                    <div class="cardName">Envoi de Colis</div>
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
                         <div class="numbers">1,504</div>
                         <div class="cardName">Messages</div>
                    </a>
               </div>

               <div class="iconBx">
                    <ion-icon name="chatbubbles-outline"></ion-icon>
               </div>
          </div>

          <div class="card">
               <div>
                    <div class="numbers">80</div>
                    <div class="cardName">Gestion D'utilisateur</div>
               </div>

               <div class="iconBx">
                    <ion-icon name="people-outline"></ion-icon>
               </div>
          </div>

          <div class="card">
               <div>
                    <div class="numbers">284</div>
                    <div class="cardName">Gestion de Bus</div>
               </div>

               <div class="iconBx">
                    <ion-icon name="car-outline"></ion-icon>
               </div>
          </div>

          <div class="card">
               <div>
                    <div class="numbers">$7,842</div>
                    <div class="cardName">Gestion de plannings</div>
               </div>

               <div class="iconBx">
                    <ion-icon name="calendar-outline"></ion-icon>
               </div>
          </div>
     </div>
     <div class="cardBox">
          <div class="card">
               <div>
                    <div class="numbers">1,504</div>
                    <div class="cardName">Gestion de Trajets</div>
               </div>

               <div class="iconBx">
                    <ion-icon name="eye-outline"></ion-icon>
               </div>
          </div>

          <div class="card">
               <div>
                    <div class="numbers">1,504</div>
                    <div class="cardName">Lignes de Transport</div>
               </div>

               <div class="iconBx">
                    <ion-icon name="eye-outline"></ion-icon>
               </div>
          </div>

          <div class="card">
               <div>
                    <div class="numbers">
                         <ion-icon name="settings"></ion-icon>
                    </div>
                    <div class="cardName">Parametre</div>
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