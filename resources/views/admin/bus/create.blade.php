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
         <h1 class="titre">Ajouter un Bus</h1>
            <form action="{{route('bus.store')}}" method="POST" enctype="multipart/form-data">
              @csrf
                <div>
                    <label for="">Numero</label>
                    <input class="item-input" type="number  " placeholder="numero bus" name="numero">
                </div>
                <div>
                    <label for="">Image</label>
                    <input class="item-input" type="file" name="image">
                </div>
                <div>
                    <label for="">description</label>
                    <input class="item-input" type="text" placeholder="description" name="description">
                </div>
                <div>
                    <label for="">NombresPlace</label>
                    <input class="item-input" type="number" placeholder="nombres de places" name="places">
                </div>
                <div>
                  <label for="">Etat du bus</label>
                  <select name="etat" class="item-input">
                      <option value="En_fonction">En fonction</option>
                      <option value="En_location">En location</option>
                  </select>
              </div>
              
                <div>
                    <label for="">Id Ligne</label>
                    <select name="lignes_id" class="item-input">
                    @foreach ($lignes as $med)
                      <option value="{{$med->id}}">{{$med->numero}}</option>    
                    @endforeach
                    </select>
                </div>
                
                <br>
                <button type="submit" class="btn">Ajouter</button>
            </form>
         </div>
    @endsection
</body>
</html>