<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Document</title>
    <style>
        h1 {
            padding-top: 16px;
            font-weight: 700;
            font-size: 30px;
            text-align: center;
            font-family: Inter, system-ui, Avenir, Helvetica, Arial, sans-serif;
            margin-top: 0%;
            margin-bottom: 0%;
        }
        .back {
            background-color: white;
           
        }
        .fill{
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .sms {
            display: grid;
            grid-template-columns: 1fr, 1fr;
        }
        .class {
            background-color: #dede;
            width: 30%;
            padding: 16px;
            border-radius: 5px;
        }
        .btn {
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
    </style>
</head>
<body>
@extends('layouts.app')
    @section('content')
        <div class=" ">
          <h1>Liste des messages</h1>

          <div class="container ">
            <div class="row" >
                    @foreach ($sms as $message)
                    <div class="col-6">
                        <div class="class">
                            <div class="fill">
                                <p>{{$message->email}}</p>    
                                <p>{{$message->telephone}}</p>    
                            </div>
                             <div>
                                <p>{{$message->description}}</p>
                             </div>
                            <div class="fill">
                                <strong>{{$message->name}}</strong>
                                <a href="#" class="btn">effacer</a>
                            </div>   
                               
                        </div>
                    </div> 
                    @endforeach
            </div>
          </div>
        </div>
    @endsection
</body>
</html>