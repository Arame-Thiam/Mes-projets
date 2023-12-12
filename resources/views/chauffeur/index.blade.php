<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/espace.css')}}">
    <title>Document</title>
</head>
<body>
        @extends('layouts.won')
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
                    <h2 class="titre">ESPACE DES CHAUFFEUR</h2>
                </div>
           </div>

           <div class="cardBox">
          <div class="card">
               <div>
                    <?php $user = Auth::user()->id; ?>
                    <a href="#">
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
           <h1 class="titre1">Listes des Planings par Jour</h1>

            <table class="table">
                <thead>
                    <tr class="tr">
                        <th>IDENTIFIENT</th>
                        <th>DESCRIPTION</th>
                        <th>LIEU</th>
                        <th>DESTINATION</th>
                        <th>DATE</th>
                        <th>HEURE</th>
                        <th>CHAUFFEUR</th>
                        <th>LIGNES</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($art as $med)
                    <tr>
                        <td>{{$med->id}}</td>    
                        <td>{{$med->description}}</td>    
                        <td>{{$med->lieu}}</td>   
                        <td>{{$med->destination}}</td>    
                        <td>{{$med->date}}</td>    
                        <td>{{$med->heurs}}</td>  
                        <td>{{$med->user_id}}</td>  
                        <td>{{$med->lignes_id}}</td>  
                    </tr>
                @endforeach        
                </tbody>
            </table>
        @endsection
</body>
</html>

 