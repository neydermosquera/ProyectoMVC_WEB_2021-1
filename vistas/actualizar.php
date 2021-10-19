<?php

    $user = "root";
    $password = "";
    $server = "localhost";
    $db = "registro";

    $conexion = new mysqli($server, $user, $password, $db);

    $iduser = $_POST['iduser']; 
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $tipodocumento = $_POST['tipodocumento'];
    $documento = $_POST['documento'];
    $birthday = $_POST['birthday'];
    $departamentonacimiento = $_POST['departamentonacimiento'];
    $ciudadnacimiento = $_POST['ciudadnacimiento'];
    $address = $_POST['address'];
    $departamentoresidencia = $_POST['departamentoresidencia'];
    $ciudadresidencia = $_POST['ciudadresidencia'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    
    $actualizar = "UPDATE persona SET nombres = '$nombres', 
    apellidos = '$apellidos', 
    idtipodocumento = $tipodocumento, 
    documento = $documento, 
    direccion = '$address', 
    idciudad = $ciudadresidencia, 
    iddepartamento = $departamentoresidencia, 
    fechanacimiento = '$birthday', 
    iddepartamentonatal = $departamentonacimiento, 
    idciudadnatal = $ciudadnacimiento, 
    email = '$email', 
    telefono = $telefono, 
    usuario = '$usuario', 
    password = '$password' 
    WHERE id = $iduser;";
        
        $resultado = mysqli_query($conexion, $actualizar) or die(mysqli_error($conexion));

       
    
        
    
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
    <link href="../css/estilos.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
 
    
    
    <title>SPA Trabajo Final</title>
</head>

<body>
<div class="container contenedorregistro" data-namespace="registro" style="height: 200px;">

            <div class="p-1 mb-1  text-white  title bg-success">
            <h3 class=" text-center">¡Actualización realizada con éxito! <i class="fa fa-check-square-o"></i> </h3>

</div>

<div class="col-sm-12 text-center divbotones">
        <button type="button" class="btn botonvolver" onclick="location.href='../index.php#/listar-usuarios'">Volver</button>
</div> <br> <br> <br>


    
</body>
</html>