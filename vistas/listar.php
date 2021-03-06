<?php

    $user = "root";
    $password = "";
    $server = "localhost";
    $db = "registro";

    $conexion = new mysqli($server, $user, $password, $db);

    if(!$conexion){
        echo "Error en la conexión con el servidor";
    }else{

        $consulta = "SELECT p.id, p.nombres, p.apellidos, td.nombre as tipodocumento, p.documento, p.direccion, c.nombre as ciudadactual, d.nombre as deptoactual, p.fechanacimiento, dnatal.nombre as deptonatal, cnatal.nombre as ciudadnatal, p.email, p.telefono, p.usuario 
        FROM persona p, departamento d, ciudad c, tipodocumento td, ciudad cnatal, departamento dnatal 
        WHERE p.idtipodocumento = td.id AND 
        p.idciudad = c.id AND 
        p.iddepartamento = d.id AND 
        p.iddepartamentonatal = dnatal.id AND 
        p.idciudadnatal = cnatal.id;";
    
        $resultado = mysqli_query($conexion, $consulta);


    }
?>



<div class=" contenedorlistado scrollme" data-namespace="registro">
    
                    <div class="contenido" style="padding-left: 50px; padding-right: 50px;">
                        <h2 style="margin-left: 50px;"><strong> Usuarios registrados</strong></h2> <br><br>
                        <div class="row">
                        </div><!--Cierre botones-->

                        <table class="table table-striped table-responsive">
                            <thead class="text-center bg-dark text-white">
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Tipo de documento</th>
                                <th>Documento</th>
                                <th>Dirección</th>
                                <th>Ciudad</th>
                                <th>Departamento</th>
                                <th>Fecha Nacimiento</th>
                                <th>Ciudad Natal</th>
                                <th>Departamento Natal</th>
                                <th>Email</th>
                                <th>Telefono</th> 
                                <th>Usuario</th>
                                <th colspan="2" class="text-center">Acción</th>
                            </thead>
                            <tbody id="respuesta">

                                <?php 
                                
                                while($mostrar = mysqli_fetch_array($resultado)){

                                    ?>
                                <tr>
                                <td> <?php echo $mostrar['nombres']; ?> </td>
                                <td><?php echo $mostrar['apellidos']; ?> </td>
                                <td><?php echo $mostrar['tipodocumento']; ?> </td>
                                <td> <?php echo $mostrar['documento']; ?></td>
                                <td><?php echo $mostrar['direccion']; ?></td>
                                <td><?php echo $mostrar['ciudadactual']; ?></td>
                                <td><?php echo $mostrar['deptoactual']; ?></td>
                                <td> <?php echo $mostrar['fechanacimiento'] ?></td>
                                <td> <?php echo $mostrar['ciudadnatal']; ?></td>
                                <td> <?php echo $mostrar['deptonatal']; ?></td>
                                <td><?php echo $mostrar['email']; ?></td>
                                <td><?php echo $mostrar['telefono']; ?></td>
                                <td><?php echo $mostrar['usuario']; ?></td>
                                <td><a  class="btn btn-outline-dark" style="width: 50px;" href="vistas/editar.php?id=<?php echo $mostrar['id'];?>" alt="Eliminar" onclick="return confirmarEditar()"><i class="fa fa-pencil"></a></td>
                                <td><a  class="btn btn-outline-dark" style="width: 50px;" href="vistas/eliminar.php?id=<?php echo $mostrar['id'];?>" alt="Eliminar" onclick="return confirmarEliminar()"><i class="fa fa-trash"></a></td>
                                </tr> 
                                    
                               <?php
                                }
                                
                                ?>
                            </tbody>

                        </table> <br><br>

                        <div class="col-sm-12 text-center">
                            <button type="button" class="btn botonvolver" onclick="location.href='#index.php'">Volver</button>
                        </div> 

                    </div>

</div>





