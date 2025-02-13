<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Vole</title>
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
        <h1>Modifier Vole</h1>
       
        <form action="{{ url('/vole.update', $vole->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="compagnie_aérienne">Compagnie Aérienne :</label>
                <input type="text" name="compagnie_aérienne" id="compagnie_aérienne" value="{{ old('compagnie_aérienne', $vole->compagnie_aérienne) }}" class="form-control">
                @error('compagnie_aérienne')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="numéro_de_vol">Numéro de vol :</label>
                <input type="text" name="numéro_de_vol" id="numéro_de_vol" value="{{ old('numéro_de_vol', $vole->numéro_de_vol) }}" class="form-control">
                @error('numéro_de_vol')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="date_départ">Date Départ :</label>
                <input type="date" name="date_départ" id="date_départ" value="{{ old('date_départ', $vole->date_départ) }}" class="form-control">
                @error('date_départ')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="date_arrivée">Date Arrivée :</label>
                <input type="date" name="date_arrivée" id="date_arrivée" value="{{ old('date_arrivée', $vole->date_arrivée) }}" class="form-control">
                @error('date_arrivée')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="lieu_départ">Lieu Départ :</label>
                <input type="text" name="lieu_départ" id="lieu_départ" value="{{ old('lieu_départ', $vole->lieu_départ) }}" class="form-control">
                @error('lieu_départ')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="lieu_arrivée">Lieu Arrivée :</label>
                <input type="text" name="lieu_arrivée" id="lieu_arrivée" value="{{ old('lieu_arrivée', $vole->lieu_arrivée) }}" class="form-control">
                @error('lieu_arrivée')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="places_disponibles">Places Disponibles :</label>
                <input type="number" name="places_disponibles" id="places_disponibles" value="{{ old('places_disponibles', $vole->places_disponibles) }}" class="form-control">
                @error('places_disponibles')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="prix">Prix :</label>
                <input type="number" name="prix" id="prix" value="{{ old('prix', $vole->prix) }}" class="form-control">
                @error('prix')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>
            <a href="{{ url('/vole.index') }}" class="btn btn-secondary">Annuler</a>
        </form>
    </div>
</body>
</html>
