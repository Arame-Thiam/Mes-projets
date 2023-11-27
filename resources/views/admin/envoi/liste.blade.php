<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Document</title>
    <style>
        .titre {
            font-weight: 700;
            font-size: 30px;
            text-align: center;
            font-family: Inter, system-ui, Avenir, Helvetica, Arial, sans-serif;
            margin-top: 0%;
            margin-bottom: 0%;
        }
    </style>
</head>
<body>
@extends('layouts.app')
    @section('content')
         <h1 class="titre">Listes des demandes d'envoi de colis</h1>
    @endsection
</body>
</html>