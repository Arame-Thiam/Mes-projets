<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>modification</title> 
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
    width: 45%;
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
@extends('layouts.won')
@section('content')
        
    <div class="container mt-5">
        <div class="login">
        <h2 class="titre">Modification Profil Chauffeur</h2> 
            @if(session('success'))
                <p class="success">{{session('success')}}</p>
            @endif
        <form action="#" method="post">
            @csrf
            @method('PUT')
            <div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="prenom" class="label">Prenom</label>
                        <input type="text" class="item-input" id="prenom" name="prenom" value="{{ $user->prenom }}" >
                    </div>
                </div>
                <div class="col-md-12"> 
                    <div class="form-group">
                        <label for="nom" class="label">Nom</label>
                        <input type="text" class="item-input" id="nom" name="nom" value="{{ $user->nom }}" >
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="adresse" class="label">Adresse</label>
                        <input type="text" class="item-input" id="adresse" name="adresse" value="{{ $user->adresse }}" >
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="telephone" class="label">Telephone</label>
                        <input type="text" class="item-input" id="telephone" name="telephone" value="{{ $user->telephone }}" >
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="email" class="label">Email</label>
                        <input type="text" class="item-input" id="email" name="email" value="{{ $user->email }}" >
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="password" class="label">Password</label>
                        <input type="password" class="item-input" id="password" name="password" value="" >
                    </div>
                </div><br>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-success">Modifier</button>
                </div>
            </div>
        </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua8zV+wv5ll2m1Xa3Uf5c5Fd/j5xmQIjB6tF5rs5Yf5P6f5L5P5W5O3j5M5" crossorigin="anonymous"></script>
    @endsection
</body>
</html>