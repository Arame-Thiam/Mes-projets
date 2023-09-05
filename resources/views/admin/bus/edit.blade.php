<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Inclure le lien CDN Bootstrap 5.3.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Modification de Bus</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Modification Bus</h1> <!-- Titre centré -->
        <form action="{{url('update/'.$bus->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" class="form-control" id="description" name="description" value="{{ $bus->description }}" placeholder="Description du Bus">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="NombrePlaces" class="form-label">Nombre de Place</label>
                        <input type="text" class="form-control" id="NombrePlaces" name="NombrePlaces" value="{{ $bus->NombrePlaces }}" placeholder="Nombre de place d'un Bus">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="lignes_id" class="form-label">ID Ligne</label>
                        <input type="text" class="form-control" id="lignes_id" name="lignes_id" value="{{ $bus->lignes_id }}" placeholder="ID du ligne de transport">
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-success">Mettre à jour</button>
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
