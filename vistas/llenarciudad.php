<?php

$user = "root";
$password = "1234";
$server = "localhost";
$db = "registro";

$conexion = new mysqli($server, $user, $password, $db);

if(!$conexion){
    echo "Error en la conexión con el servidor";
}

$ciudad = "SELECT * FROM ciudad";
$result = mysqli_query($conexion, $ciudad);


echo '<select class="form-select" id="ciudadnacimiento" name="ciudadnacimiento">';
    while($fila = mysqli_fetch_array($result)){
        if($fila['iddepartamento']==$_GET['c']){
            echo "<option value='".$fila['id']."'>".$fila['nombre']."</option>";
        }
    }
echo '</select>';
    
        

?>