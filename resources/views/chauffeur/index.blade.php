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

 