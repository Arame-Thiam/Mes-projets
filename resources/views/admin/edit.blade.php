<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>modification</title> 
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Modification Admin</h1> 
        <form action="{{route('user.update',$user->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="prenom" class="form-label">Prenom</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" value="{{ $user->prenom }}" >
                    </div>
                </div>
                <div class="col-md-12"> 
                    <div class="form-group">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom" value="{{ $user->nom }}" >
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="adresse" class="form-label">Adresse</label>
                        <input type="text" class="form-control" id="adresse" name="adresse" value="{{ $user->adresse }}" >
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="telephone" class="form-label">Telephone</label>
                        <input type="text" class="form-control" id="telephone" name="telephone" value="{{ $user->telephone }}" >
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="{{ $user->email }}" >
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" value="" >
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-success">Modifier</button>
                </div>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua8zV+wv5ll2m1Xa3Uf5c5Fd/j5xmQIjB6tF5rs5Yf5P6f5L5P5W5O3j5M5" crossorigin="anonymous"></script>
    
    <style>
        body {
            background-color: #f8f9fa; 
        }

        .container {
            background-color: #fff; 
            padding: 20px; 
            border-radius: 10px; 
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); 
        }

        .form-group {
            margin-bottom: 20px; 
        }

        .form-group label {
            color: #333; 
            font-weight: bold; 
        }

        .form-control {
            border-color: #28a745; 
        }

        .btn-success {
            background-color: #28a745; 
            color: #fff; 
            border: none; 
        }
        h1 {
            color: #333; 
        }
    </style>
</body>
</html>