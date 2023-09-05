<!DOCTYPE html>
<html>
<head>
    <title>Liste des Utilisateurs</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
@extends('layouts.app')
@section('content')
    <div class="container">
       <div class="row justify-content-center">
          <div class="row">
             <div class="col-lg-12 margin-tb">
               <div class="card  p-4">
                 
                  <h1 class="pull-left ">Liste des Utilisateurs</h1>
                    <form action="#" method="POST">
                        <table class="table table-dark table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th>Prénom</th>
                                    <th>Nom</th>
                                    <th>Adresse</th>
                                    <th>Téléphone</th>
                                    <th>Profil</th>
                                    <th>Email</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $med)
                                    <tr>
                                    <td>{{$med->prenom}}</td>    
                                    <td>{{$med->nom}}</td>    
                                    <td>{{$med->adresse}}</td>    
                                    <td>{{$med->telephone}}</td>    
                                    <td>{{$med->profil}}</td>    
                                    <td>{{$med->email}}</td>    
                                    <td>
                                        <a href="#" class="btn btn-info">Bloquer</a>
                                        <a href="{{route('user.destroy',$med->id)}}" class="btn btn-danger">Suprimer</a>
                                    </td>
                                        
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
</body>
</html>
