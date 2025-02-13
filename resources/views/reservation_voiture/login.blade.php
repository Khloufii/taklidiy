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
    <h1>Login</h1>
    <form action="{{url('/loginn')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="email">Login :</label>
            <input type="text" name="email" id="email" class="form-control">
           
        </div>
        <div class="form-group">
            <label for="password">Password :</label>
            <input type="password" name="password" id="password" class="form-control" required>
           
        </div>
        

        <button type="submit" class="btn btn-primary">Créer</button>
        <a href="{{url('/voitures')}}" class="btn btn-secondary">Annuler</a>
    </form>
</div>

</body>
</html>
