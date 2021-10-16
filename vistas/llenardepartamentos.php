<?php

$user = "root";
$password = "1234";
$server = "localhost";
$db = "registro";

$conexion = new mysqli($server, $user, $password, $db);

if(!$conexion){
    echo "Error en la conexión con el servidor";
}

$departamento = "SELECT * FROM departamento";
$result = mysqli_query($conexion, $departamento);

    while($fila = mysqli_fetch_array($result)){
        echo "<option value='".$fila['id']."'>".$fila['nombre']."</option>";
    }

    
        

?>