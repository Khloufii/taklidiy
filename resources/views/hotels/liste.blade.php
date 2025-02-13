<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels Dashboard</title>
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
                <h2 class="h2_font">Hotels Disponibles</h2>
                <div class="btn-container">
                    <a class="btn-ajouter" href="{{url('form_hotel')}}">Ajouter une voiture</a>
                </div>
                <table class="cnter">
                    @csrf
                    <thead>
                        <tr class="th_color">
                            <th>Id</th>
                            <th>nom</th>
                            <th>ville</th>
                            <th>adresse</th>
                            <th>étoiles</th>
                            <th>prix_par_nuit</th>
                            <th>Date de Création</th>
                            <th>Date de Modification</th>
                            <th>Supprimer</th>
                            <th>Modifier</th>
                            <th>Détails</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($hotels as $hot)
                        <tr>
                            <td>{{$hot->id}}</td>
                            <td>{{$hot->nom}}</td>
                            <td>{{$hot->ville}}</td>
                            <td>{{$hot->adresse}}</td>
                            <td>{{$hot->étoiles}}</td>
                            <td>{{$hot->prix_par_nuit}}</td>
                            <td>{{$hot->created_at}}</td>
                            <td>{{$hot->updated_at}}</td>
                            <td class="sup">
                                <a onclick="return confirm('Voulez-vous vraiment supprimer cette hotel ?')" class="btnsup" href="{{url('suprimer_hotel', $hot->id)}}">Supprimer</a>
                            </td>
                            <td class="edit">
                                <a class="btnedit" href="{{url('edit_hotel', $hot->id)}}">Modifier</a>
                            </td>
                            <td class="detail">
                                <a class="btndetail" href="{{url('detaill_hotel', $hot->id)}}">Détails</a>
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
