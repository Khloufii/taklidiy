<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voiture Reservation</title>
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
    background-color: #69A1D2;
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
    background-color: #622bff;
    color: white;
    text-transform: uppercase;
}

td {
    background-color: #ebe7e7;
}

tr:hover td {
    background-color: #f1f1f1;
}

.detail {
    text-align: center;
    padding: 8px;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}




.btndetail {
    text-decoration: none;
    color: white;
    background-color: green;
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
                <h2 class="h2_font">Voitures Disponibles</h2>
                <div class="btn-container">
                    <a class="btn-ajouter" href="{{url('voituresreservation.mes_reservation')}}">Mes reservation </a>
                </div>
                <table class="cnter">
                    @csrf
                    <thead>
                        <tr class="th_color">
                           
                            <th>Marque</th>
                            <th>Modèle</th>
                            <th>Année</th>
                            <th>Places Disponibles</th>
                            <th>Prix par Jour</th>
                           
                           
                            <th>Réserver</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($voitures as $voit)
                        <tr>
                           
                            <td>{{$voit->marque}}</td>
                            <td>{{$voit->modèle}}</td>
                            <td>{{$voit->année}}</td>
                            <td>{{$voit->places_disponibles}}</td>
                            <td>{{$voit->prix_par_jour}}</td>
                           
                            
                            <td class="detail">
                                <a class="btndetail" href="{{url('voituresreservation.info', $voit->id)}}">Réserver</a>
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
