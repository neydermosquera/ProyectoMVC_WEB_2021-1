<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/.css" rel="stylesheet" />
    <title>SPA Trabajo Final</title>
    <style type="text/css">
        .barranavegacion{
        background-color: #D5DBDB;
        color: white;
        }
        a{
            color: black;
            padding-left: 15px;
            padding-right: 35px;
            font-size: 20px;
            font-weight: 350;
            font-family: Gill Sans / Gill Sans MT, sans-serif;
            
        }
        li{
            padding-right: 35px;
        }
        .contenedorinicio{
            background-color: #BFC9CA;
            margin-top: 25px;
            height: 500px;
            padding: auto;
            border-radius: 15px;
        }
        .inicio{
            margin-top: 20px;
            padding-top: 50px;
        }
        h1{
            color: white;
            font-family: -webkit-pictograph;
            font-weight: 1000;
        }
        .textoinicio{
            padding-left: 50px;  
        }
        img{
            border-radius: 15px;
            box-shadow: 10px 15px 10px 15px  rgb(170, 172, 169);
        }

    </style>
</head>
<body>

    <!--Barra de navegación!-->

    <nav class="navbar navbar-expand-lg barranavegacion">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php" data-go="inicio">SPA WEB</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Registro</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Datos</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>

    <!--Div Inicio!-->

    <div class="container contenedorinicio" data-namespace="inicio">
        <div class="row inicio">
            <div class="col-5 textoinicio">
                <h1>SPA WEB</h1>
            </div>
            <div class="col-7">
                <img src="images/19362653.jpg" alt="" width="600px">
            </div>
       
        </div>
    </div>

    <!--Div Registro!-->

    <div class="container" data-namespace="registro">
        <div class="row inicio">
            <div class="col-5 textoinicio">
                <h1>SPA WEB</h1>
            </div>
            <div class="col-7">
                <img src="images/19362653.jpg" alt="" width="600px">
            </div>
       
        </div>
    </div>


    
</body>
</html>