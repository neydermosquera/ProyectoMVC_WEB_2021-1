<?php

function conectar(){

    $user = "root";
    $password = "1234";
    $server = "localhost";
    $db = "registro";

    $conexion = new mysqli($server, $user, $password, $db);


};

    
?>