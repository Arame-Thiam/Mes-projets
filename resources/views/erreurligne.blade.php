<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('scss/head.css')}}">
    <title>Document</title>
    <style>
          .erreur {
            color: red;
            text-align: center;
            font-size: 500;
            padding: 16px;
          }
    </style>
</head> 
<body>
  @extends('layouts.header')
        @section('content')
        <div class="section">
            <h1 class="erreur">Oufff nous somme desole</h1>
              <center><img src="{{asset('image/error.svg')}}" alt="" srcset=""></center>
            <h1 class="erreur">Le tarjet que vous avez choisie est indisponible pour L'instant</h1>
        </div>
        @endsection

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/script.js')}}"></script>
</body>
</html>