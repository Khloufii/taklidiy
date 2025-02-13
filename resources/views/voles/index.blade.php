<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voles Dashboard</title>
    <style>
        body {
    font-family: 'Arial', sans-serif;
    background-color: #f8f9fa;
    margin: 0;
    padding: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container-scroller {
    width: 100%;
    max-width: 1200px;
    background: #ffffff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
}

.h2_font {
    text-align: center;
    font-size: 32px;
    color: #333;
    margin-bottom: 20px;
}

.btn-container {
    text-align: center;
    margin-bottom: 20px;
}

.btn-ajouter {
    text-decoration: none;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    background-color: #62A1D9;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn-ajouter:hover {
    background-color: #357ABD;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 10px;
    background-color: #f8f8f8;
}

th, td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

th {
    background-color: #007bff;
    color: white;
    text-transform: uppercase;
}

td {
    background-color: #ebe7e7;
}

tr:hover td {
    background-color: #f1f1f1;
}

.sup, .edit, .detail {
    text-align: center;
    padding: 8px;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.btnsup {
    text-decoration: none;
    color: white;
    background-color: red;
    padding: 5px 10px;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.btnsup:hover {
    background-color: darkred;
}

.btnedit {
    text-decoration: none;
    color: white;
    background-color: green;
    padding: 5px 10px;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.btnedit:hover {
    background-color: darkgreen;
}

.btndetail {
    text-decoration: none;
    color: white;
    background-color: blue;
    padding: 5px 10px;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.btndetail:hover {
    background-color: darkblue;
}

    </style>
</head>
<body>
    <div class="container-scroller">
        <div class="main-panel">
            <div class="content-wrapper">
                <h2 class="h2_font">Voles Disponibles</h2>
                <div class="btn-container">
                    <a class="btn-ajouter" href="{{url('vole.create')}}">Ajouter une vole</a>
                </div>
                <table class="cnter">
                    @csrf
                    <thead>
                        <tr class="th_color">
                            <th>Id</th>
                            <th>Compagnie Aérienne</th>
                            <th>numéro de vol</th>
                            <th>date départ</th>
                            <th>date arrivée</th>
                            <th>lieu départ</th>
                            <th>lieu arrivée</th>
                            <th>places disponibles</th>
                            <th>Prix</th>
                            <th>Supprimer</th>
                            <th>Modifier</th>
                            <th>Détails</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($voles as $vol)
                        <tr>
                            <td>{{$vol->id}}</td>
                            <td>{{$vol->compagnie_aérienne}}</td>
                            <td>{{$vol->numéro_de_vol}}</td>
                            <td>{{$vol->date_départ}}</td>
                            <td>{{$vol->date_arrivée}}</td>
                            <td>{{$vol->lieu_départ}}</td>
                            <td>{{$vol->lieu_arrivée}}</td>
                            <td>{{$vol->places_disponibles}}</td>
                            <td>{{$vol->prix}}</td>
                            <td class="sup">
                                <a onclick="return confirm('Voulez-vous vraiment supprimer cette vole ?')" class="btnsup" href="{{url('vole.destroy', $vol->id)}}">Supprimer</a>
                            </td>
                            <td class="edit">
                                <a class="btnedit" href="{{url('vole.edit', $vol->id)}}">Modifier</a>
                            </td>
                            <td class="detail">
                                <a class="btndetail" href="{{url('vole.show', $vol->id)}}">Détails</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
