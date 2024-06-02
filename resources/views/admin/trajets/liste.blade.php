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
            gap: 17%;
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
                border: 1px solid blue;
                padding: 0.6em 1.2em;
                font-size: 1em;
                font-weight: 500;
                font-family: Inter, system-ui, Avenir, Helvetica, Arial, sans-serif;
                background-color: blue;
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
        <h1 align="center">Liste Des Trajets pour Une Ligne De Transport</h1>
        <a href="{{route('trajets.create')}}" class="btn btn-success">Inserer un trajet</a>
    </div>
        <table class="table">
            <tr class="tr">
                <th>Identifient</th>
                <th>Depart</th>
                <th>Arrivee</th>
                <th>Prix</th>
                <th>Date</th>
                <th>Heure de depart</th>
                <th>Ligne de transport</th>
                <th>Action</th>
            </tr>
            @foreach ($x as $med)
            <tr>
                <td>{{$med->id}}</td>  
                <td>{{$med->lieu}}</td>    
                <td>{{$med->arrivee}}</td>    
                <td>{{$med->prix}}</td>    
                <td>{{$med->date}}</td> 
                <td>{{$med->heure}}</td>    
                <td>{{$med->lignes_id}}</td>    
                <td>
                    <a href="#" class="btn" >Modifier</a>
                    <a href="{{ route('trajets.destroy', $med->id) }}" class="btn2" onclick="alert('Vous allez supprimer cette enregisgtrement')">Supprimer</a>
                </td>
            </tr>
            
            @endforeach
        </table>
    </div>
    </div>
    @endsection
</body>
</html>