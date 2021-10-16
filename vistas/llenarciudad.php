<?php

$user = "root";
$password = "1234";
$server = "localhost";
$db = "registro";

$conexion = new mysqli($server, $user, $password, $db);

if(!$conexion){
    echo "Error en la conexión con el servidor";
}

$departamento_id = filter_input(INPUT_POST, 'departamento_id'); //obtenemos el parametro que viene de ajax



  $sql = "SELECT id, nombre from ciudad where iddepartamento = ".$departamento_id;  
  $query = mysqli_query($conexion, $sql);
  $filas = mysqli_fetch_all($query, MYSQLI_ASSOC); 
  mysqli_close($conexion);

     


?>

    <?php foreach($filas as $op): //creamos las opciones a partir de los datos obtenidos ?>
    <option value="<?= $op['id'] ?>"><?= $op['nombre'] ?></option>
    <?php endforeach; ?> 
    
        

