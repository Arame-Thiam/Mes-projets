<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Modification Ligne de Transport</title>
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
    <div class="container">
      <div class="conter mt-5">
        
        <div class="login">
        <h1 class="titre">Modification Ligne de Transport</h1>  
        <form action="{{route('ligne.update', $ligne->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
            <div class="col-md-12">
                    <div class="form-group">
                        <label for="libelle">Numero</label>
                        <input type="text" class="item-input" id="libelle" name="numero" placeholder="Libelle de la ligne" value="{{$ligne->numero}}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="libelle">Libelle</label>
                        <input type="text" class="item-input" id="libelle" name="libelle" placeholder="Libelle de la ligne" value="{{$ligne->libelle}}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="nombre_bus">image</label>
                        <input type="file" class="item-input" id="nombre_bus" name="image" placeholder="Nombre de bus" >
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="lieu">Lieu Depart</label>
                        <input type="text" class="item-input" id="lieu" name="lieu" placeholder="Lieu de départ" value="{{$ligne->lieu}}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="destination">Destination</label>
                        <input type="text" class="item-input" id="destination" name="destination" placeholder="Destination" value="{{$ligne->destination}}">
                    </div>
                </div><br>
                <div class="col-md-12">
                    <button type="submit" class="btn">Modifier</button>
                </div>
            </div>
        </form>

        </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua8zV+wv5ll2m1Xa3Uf5c5Fd/j5xmQIjB6tF5rs5Yf5P6f5L5P5W5O3j5M5" crossorigin="anonymous"></script>
    
    @endsection
</body>
</html>
