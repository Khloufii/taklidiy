<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Voiture</title>
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
            background-color: #357ABD;
        }

        .text-danger {
            color: red;
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
    </style>
</head>
<body>
    <div class="container">
        <h1>Modifier Voiture</h1>
       
        <form action="{{ url('/update_voiture', $voiture->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="marque">Marque :</label>
                <input type="text" name="marque" id="marque" value="{{ old('marque', $voiture->marque) }}" class="form-control">
                @error('marque')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="modèle">Modèle :</label>
                <input type="text" name="modèle" id="modèle" value="{{ old('modèle', $voiture->modèle) }}" class="form-control">
                @error('modèle')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="année">Année :</label>
                <input type="number" name="année" id="année" value="{{ old('année', $voiture->année) }}" class="form-control">
                @error('année')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="places_disponibles">Places disponibles :</label>
                <input type="number" name="places_disponibles" id="places_disponibles" value="{{ old('places_disponibles', $voiture->places_disponibles) }}" class="form-control">
                @error('places_disponibles')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="prix_par_jour">Prix par jour :</label>
                <input type="number" name="prix_par_jour" id="prix_par_jour" value="{{ old('prix_par_jour', $voiture->prix_par_jour) }}" class="form-control">
                @error('prix_par_jour')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>
            <a href="{{ url('/voitures') }}" class="btn btn-secondary">Annuler</a>
        </form>
    </div>
</body>
</html>
