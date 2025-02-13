<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails Voiture</title>
    <style>
        body {
    font-family: 'Arial', sans-serif;
    background-color: #f8f9fa;
    color: #333;
    margin: 0;
    padding: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    background: #ffffff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    max-width: 600px;
    width: 100%;
    text-align: left;
}

h2 {
    text-align: center;
    color: #007bff;
    margin-bottom: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

td {
    padding: 10px;
    border-bottom: 1px solid #ddd;
}

td:first-child {
    font-weight: bold;
    color: #555;
}

tr:nth-child(even) td {
    background-color: #f1f1f1;
}

.btn {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    text-align: center;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s;
}

.btn:hover {
    background-color: #0056b3;
}

    </style>
</head>
<body>
    <div class="container">
        <h2>Détails Voiture</h2>
        
        <table>
            <tr><td>Id :</td><td>{{$voiture->id}}</td></tr>
            <tr><td>Marque :</td><td>{{$voiture->marque}}</td></tr>
            <tr><td>Modèle :</td><td>{{$voiture->modèle}}</td></tr>
            <tr><td>Année :</td><td>{{$voiture->année}}</td></tr>
            <tr><td>Places disponibles :</td><td>{{$voiture->places_disponibles}}</td></tr>
            <tr><td>Prix par jour :</td><td>{{$voiture->prix_par_jour}}</td></tr>
            <tr><td>Date de création :</td><td>{{$voiture->created_at}}</td></tr>
            <tr><td>Date de modification :</td><td>{{$voiture->updated_at}}</td></tr>
        </table>
        <a href="{{url('/voitures')}}" class="btn">Retour</a>
    </div>
</body>
</html>
