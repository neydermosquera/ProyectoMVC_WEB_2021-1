<?php

    $user = "root";
    $password = "";
    $server = "localhost";
    $db = "registro";

    $conexion = new mysqli($server, $user, $password, $db);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
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


    $insertar = "INSERT INTO persona (nombres, apellidos, idtipodocumento, documento, direccion, idciudad, iddepartamento, fechanacimiento, iddepartamentonatal, idciudadnatal, email, telefono, usuario, password) 
    VALUES ('$nombres','$apellidos','$tipodocumento','$documento','$address','$ciudadresidencia','$departamentoresidencia','$birthday','$departamentonacimiento','$ciudadnacimiento ','$email','$telefono','$usuario','$password')";
        
    $resultado = mysqli_query($conexion, $insertar);

    if($resultado){

        echo 'Registro Exitoso';
    }else{
        echo 'incorrecto';
    }
} 

?>


