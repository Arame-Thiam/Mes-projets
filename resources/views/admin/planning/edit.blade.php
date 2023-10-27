<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Document</title>
    <style> 
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
  .btn:hover {
    background-color: red;
    border: 1px solid red;
  }

  .login{
    background-color: white;
    margin: auto;
    width: 40%;
    border-radius: 8px;
    padding-left:20px ;
    padding-right: 20px;
    margin-top: 30px;
    margin-bottom: 60px;
    padding: 32px;
    box-shadow: 0 .1rem .2rem;
  }
label {
    font-weight: 600;
    display: inline;
    color: black;
    font-family: Inter, system-ui, Avenir, Helvetica, Arial, sans-serif;
    display: block;
    margin-bottom: 8px;
  }
  .item-input {
    padding: 16px;
    width: 100%;
    margin: auto;
    background: #dedede;
    border: 1px solid #dedede;
    border-radius: 8px;
    border-left: 5px solid #2a2185;
  }
  
  .coly {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-top: 8px;
    padding-bottom: 8px;
  }
  .titre {
        font-weight: 700;
        font-size: 30px;
        text-align: center;
        font-family: Inter, system-ui, Avenir, Helvetica, Arial, sans-serif;
        margin-top: 0%;
        margin-bottom: 0%;
}
.btn-primary {
    padding-bottom: 8px;
}
  
    </style>
</head>
<body>
@extends('layouts.app')
    @section('content')
          
         <div class="login">
         <h1 class="titre">Modifier des plannings</h1>
            <form action="{{route('planning.update', $planning->id)}}">
                <div>
                    <label for="">Description</label>
                    <input class="item-input" type="text" name="description" value="{{$planning->description}}">
                </div>
                <div>
                    <label for="">Lieu</label>
                    <input class="item-input" type="text" name="lieu" value="{{$planning->lieu}}">
                </div>
                <div>
                    <label for="">Destination</label>
                    <input class="item-input" type="text" name="destination" value="{{$planning->destination}}">
                </div>
                <div>
                    <label for="">Date</label>
                    <input class="item-input" type="date" name="date" value="{{$planning->date}}">
                </div>
                <div>
                    <label for="">Heure</label>
                    <input class="item-input" type="time" name="heurs" value="{{$planning->heurs}}">
                </div>
                <div>
                    <label for="">Id Ligne</label>
                    <select name="lignes_id" class="item-input">
                        @foreach ($lignes as $med)
                            <option value="{{$med->id}}" @if ($planning
                            ->lignes_id === $med->id) selected @endif>{{$med->numero}}</option>    
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="">Id User</label>
                    <select name="user_id" class="item-input">
                        @foreach ($user as $med)
                            <option value="{{$med->id}}" @if ($planning
                            ->user_id === $med->id) selected @endif>{{$med->id}}</option>    
                        @endforeach
                    </select>
                </div>                
                <br>
                <button type="submit" class="btn">Modifier</button>
            </form>
         </div>
    @endsection
</body>
</html>