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
    
    <div class="container">
        <div class="pull-left">
            <h1 align="center">Liste Des Bus</h1>
        </div>
        <div class="pull-left">
            <a href="{{route('bus.create')}}" class="btn btn-success">Inserer Bus</a>
        </div><br>
        <table class="table table-white table-hover ">
            <tr>
                <th>Numero</th>
                <th>Image</th>
                <th>Description</th>
                <th>Nombre Place</th>
                <th>ID Ligne</th>
                <th>Action</th>
            </tr>
            @foreach ($bus as $med)
            <tr>
                <td>{{$med->id}}</td> 
                <td><img src="{{ $med->image }}" alt=""  ></td>    
                <td>{{$med->description}}</td>    
                <td>{{$med->NombrePlaces}}</td>    
                <td>{{$med->lignes_id}}</td>    
                <td>
                    <a href="{{route('bus.edit',$med->id)}}" class="btn btn-primary" >Modifier</a>
                    <a href="{{ route('bus.destroy', $med->id) }}" class="btn btn-danger">Supprimer</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    </div>
    @endsection
</body>
</html>