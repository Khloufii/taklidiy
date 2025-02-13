<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .form-group {
        margin-bottom: 20px;
    }

    label {
        font-weight: bold;
    }

    input[type="text"],
    input[type="number"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        outline: none;
    }

    button[type="submit"] {
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        background-color: #62A1D9;
        color: #fff;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    button[type="submit"]:hover {
        background-color: #62A1D9; /* couleur vert foncé */
    }
    .btn-secondary {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #6c757d;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration: none;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
        }
    .text-danger {
        color: red;
    }
</style>

</head>
<body>
<div class="container">
    <h1>Créer un nouveau voiture</h1>
    <form action="{{url('/add_voiture')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="marque">Marque :</label>
            <input type="text" name="marque" id="marque" class="form-control">
            @error('marque')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="modèle">Modèle :</label>
            <input type="text" name="modèle" id="modèle" class="form-control" required>
            @error('modèle')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="année">Année :</label>
            <input type="number" name="année" id="année" class="form-control" required>
            @error('année')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="places_disponibles">Places disponibles :</label>
            <input type="number" name="places_disponibles" id="places_disponibles" class="form-control" required>
            @error('places_disponibles')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="prix_par_jour">Prix par jour :</label>
            <input type="number" name="prix_par_jour" id="prix_par_jour" class="form-control" required>
            @error('prix_par_jour')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Créer</button>
        <a href="{{url('/voitures')}}" class="btn btn-secondary">Annuler</a>
    </form>
</div>

</body>
</html>
