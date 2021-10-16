<?php

include("main.php");

$con = conectar();


?>

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
    <link href="css/estilos.css" rel="stylesheet" type="text/css"/>
    
    <title>SPA Trabajo Final</title>
</head>
<body>

    <!--Barra de navegación!-->

    <nav class="navbar navbar-expand-lg barranavegacion">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.html" data-go="inicio">SPA WEB</a>
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



           <!-- VISTA CONTENEDOR PRINCIPAL -->
    <div class="container-fluid" data-namespace="vistaPrincipal" id="vistaPrincipal">

   
    

    </div>




        <!-- Footer -->
    <footer class="bg-dark text-center text-white pie">
  

      <section class="mb-4">
        <p>
          Universidad Industrial de Santander - Facultad de Ingenierías Fisicomecánicas - Escuela de Ingeniería de Sistemas e informatica 
          <br>
           Programación en la Web - SystemFest 2021.
        </p>
      </section>

    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2021 Bucaramanga - Santander

    </footer>
    <!-- Footer -->
   


    <script src="js/main.js"></script>
    <script src="js/validacion.js"></script>
    <script src="js/rutas.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
</body>
</html>