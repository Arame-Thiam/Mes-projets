<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            gap: 56%;
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
            }
    </style>
</head>
<body>
@extends('layouts.app')
    @section('content')
         <div class="flex">
                <h1>listes des plannings</h1>
                <a href="{{route('planning.create')}}" class="btn">ajouter</a>
         </div>
         <table class="table">
              <thead>
                <tr class="tr">
                    <th>ID</th>
                    <th>DESCRIPTION</th>
                    <th>LIEU</th>
                    <th>DESTINATION</th>
                    <th>DATE</th>
                    <th>HEURE</th>
                    <th>USER ID</th>
                    <th>LIGNES ID</th>
                    <th>ACTIONS</th>
                </tr>
              </thead>
              <tbody>
                            @foreach ($planning as $m)
                            <tr>
                                <td>{{$m->id}}</td>
                                <td>{{$m->description}}</td>
                                <td>{{$m->lieu}}</td>
                                <td>{{$m->destination}}</td>
                                <td>{{$m->date}}</td>
                                <td>{{$m->heurs}}</td>
                                <td>{{$m->user_id}}</td> 
                                <td>{{$m->lignes_id}}</td>  
                                <td>
                                    <a href="{{route('planning.edit',$m->id)}}" class="btn1">modifier </a>
                                    &nbsp;
                                    <a href="{{route('planning.destroy',$m->id)}}" class="btn2">Delete</a>
                                </td> 
                            </tr> 
                            @endforeach 
              </tbody>
         </table>
    @endsection
</body>
</html>