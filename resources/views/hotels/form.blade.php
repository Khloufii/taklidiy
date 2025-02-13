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
    <h1>Créer un nouveau hotel</h1>
    <form action="{{url('/add_hotel')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nom">Nom :</label>
            <input type="text" name="nom" id="nom" class="form-control">
            @error('nom')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="ville">Ville :</label>
            <input type="text" name="ville" id="ville" class="form-control" required>
            @error('ville')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="adresse">Adresse :</label>
            <input type="text" name="adresse" id="adresse" class="form-control" required>
            @error('adresse')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="étoiles">Etoiles :</label>
            <input type="number" name="étoiles" id="étoiles" class="form-control" required>
            @error('étoiles')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="prix_par_nuit">Prix par nuit :</label>
            <input type="number" name="prix_par_nuit" id="prix_par_nuit" class="form-control" required>
            @error('prix_par_nuit')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Créer</button>
        <a href="{{url('/hotels')}}" class="btn btn-secondary">Annuler</a>
    </form>
</div>

</body>
</html>
