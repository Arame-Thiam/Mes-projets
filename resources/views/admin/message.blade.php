<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .back {
            background-color: white;
           
        }
        .fill{
            display: flex;
            justify-content: space-between;
        }
        .sms {
            display: grid;
            grid-template-columns: 1fr, 1fr;
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
                        <div class=" p-3 bg-white rounded-5 ">
                            <div >
                                <strong>{{$message->name}}</strong>
                                <a href="#" class="btn btn-danger">effacer</a>
                            </div>
                            <hr>
                                    <p>{{$message->description}}</p>  
                            <hr>    
                            <div >
                                    <p>{{$message->email}}</p>    
                                    <p>{{$message->telephone}}</p>    
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