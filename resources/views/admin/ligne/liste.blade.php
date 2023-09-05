<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
@extends('layouts.app')
@section('content')
<div class="col-lg-12">
    <div class="pull-left">
        <h1 align="center">Liste Des lignes De Transport</h1>
        <hr>
    </div>
    <div class="pull-right">
        <a href="{{route('ligne.create')}}" class="btn btn-success">Inserer ligne</a></div>
        <table class="table">
            <tr>
                <th>Libelle Ligne</th>
                <th>Nombre de bus</th>
                <th>Lieu Depart</th>
                <th>Destination</th>
                <th>Action</th>
            </tr>
            @foreach ($ligne as $med)
            <tr>
                <td>{{$med->libelle}}</td>    
                <td>{{$med->nombre_bus}}</td>    
                <td>{{$med->lieu}}</td>    
                <td>{{$med->destination}}</td>    
                <td>
                    <a href="{{route('ligne.edit',$med->id)}}" class="btn btn-primary" >Modifier</a>
                    <a href="{{ route('ligne.destroy', $med->id) }}" class="btn btn-danger">Supprimer</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    @endsection
</body>
</html>