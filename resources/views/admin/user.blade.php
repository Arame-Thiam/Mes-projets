<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Document</title>
    <style>
           h1 {
                font-weight: 700;
                font-size: 30px;
                font-family: Inter, system-ui, Avenir, Helvetica, Arial, sans-serif;
                margin-top: 0%;
                margin-bottom: 0%;
           }
           .flex {
            display: flex;
            align-items: center;
            gap:44%;
            padding: 24px;
           }
           .btn {
                border-radius: 8px;
                border: 1px solid #2a2185;
                padding: 0.6em 1.2em;
                font-size: 1em;
                font-weight: 500;
                font-family: Inter, system-ui, Avenir, Helvetica, Arial, sans-serif;
                background-color: #2a2185;
                cursor: pointer;
                transition: border-color 0.25s;
                color: white;
                text-decoration: none;
            }
            .btn1 {
                border-radius: 8px;
                border: 1px solid rgb(255, 238, 0);
                padding: 0.6em 1.2em;
                font-size: 1em;
                font-weight: 500;
                font-family: Inter, system-ui, Avenir, Helvetica, Arial, sans-serif;
                background-color: rgb(255, 238, 0);
                cursor: pointer;
                transition: border-color 0.25s;
                color: white;
                text-decoration: none;
            }
            .btn2 {
                border-radius: 8px;
                border: 1px solid red;
                padding: 0.6em 1.2em;
                font-size: 1em;
                font-weight: 500;
                font-family: Inter, system-ui, Avenir, Helvetica, Arial, sans-serif;
                background-color: red;
                cursor: pointer;
                transition: border-color 0.25s;
                color: white;
                text-decoration: none;
            }
            .table{
               padding: 0 24px;
            }
            .tr{
                background-color: #dedede;
                
            }
            th {
                padding: 16px;
            }
            td {
                padding: 16px;
                font-size: 1em;
                font-weight: 500;
                font-family: Inter, system-ui, Avenir, Helvetica, Arial, sans-serif;
            }
    </style>
</head>
<body>
@extends('layouts.app')
@section('content')
<div class="col-lg-12">
    <div class="container">
    <div class="flex">
        <h1 align="center">Liste Des Differents Utilisateurs inscrit</h1>
    </div>
        <table class="table">
            <tr class="tr">
                <th>Id</th>
                <th>Prenom</th>
                <th>Nom</th>
                <th>Adresse</th>
                <th>Telephone</th>
                <th>Profile</th>
                <th>Email</th>
                <th>Statut</th>
                <th>Action</th>
            </tr>
            @foreach ($user as $med)
            @if($med->profil === "client" || $med->profil === "chauffeur" )
            <tr>
                <td>{{$med->id}}</td>    
                <td>{{$med->prenom}}</td>    
                <td>{{$med->nom}}</td>    
                <td>{{$med->adresse}}</td>    
                <td>{{$med->telephone}}</td>  
                <td>{{$med->profil}}</td>  
                <td>{{$med->email}}</td>  
                <td>{{$med->statut == 1 ? 'Activé' : 'Bloqué'}}</td>
                    <td>
                        @if ($med->statut == 1)
                        <a href="{{route('user.bloquer', $med->id)}}" class="btn" onclick="alert('Vous allez bloquer ce compte')">Bloquer</a>
                        @else
                        <a href="{{route('user.debloquer', $med->id)}}" class="btn1">Débloquer</a>
                        @endif  
                        <a href="{{route('user.destroy', $med->id)}}" class="btn2" onclick="alert('Vous allez suprimmer ce compte')">Supprimer</a>
                </td>
            </tr>
            @endif
            @endforeach
        </table>
    </div>
    </div>
    @endsection
</body>
</html>