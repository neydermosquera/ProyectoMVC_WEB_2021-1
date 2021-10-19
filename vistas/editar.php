<?php 

$user = "root";
$password = "";
$server = "localhost";
$db = "registro";

$conexion = new mysqli($server, $user, $password, $db);


if(empty($_GET['id'])){
    header('Location: ../index.php#/listar-usuarios');
}

$departamentos = "SELECT id, nombre FROM departamento";
$ejecutarDepto = mysqli_query($conexion, $departamentos) or die(mysqli_error($conexion));

$tipoDocumento = "SELECT id, nombre FROM tipodocumento";
$ejecutarDocu = mysqli_query($conexion, $tipoDocumento) or die(mysqli_error($conexion));

$ciudad = "SELECT id, nombre FROM ciudad";
$ejecutarCiu = mysqli_query($conexion, $ciudad) or die(mysqli_error($conexion));

$iduser = $_GET['id']; 
$verificarExistencia = "SELECT p.id, p.nombres, p.apellidos, td. id as idtd, td.nombre as tipodocumento, p.documento, p.direccion, c.id as idcactual,  c.nombre as ciudadactual, d.id as iddactual, d.nombre as deptoactual, p.fechanacimiento, dnatal.id as iddnatal, dnatal.nombre as deptonatal, cnatal.id as idcnatal, cnatal.nombre as ciudadnatal, p.email, p.telefono, p.usuario, p.password
FROM persona p, departamento d, ciudad c, tipodocumento td, ciudad cnatal, departamento dnatal 
WHERE p.idtipodocumento = td.id AND 
p.idciudad = c.id AND 
p.iddepartamento = d.id AND 
p.iddepartamentonatal = dnatal.id AND 
p.idciudadnatal = cnatal.id AND
P.id = $iduser;";
$sql = mysqli_query($conexion, $verificarExistencia);

$resultado_sql = mysqli_num_rows($sql);

if($resultado_sql == 0){
    header('Location: ../index.php#/listar-usuarios');
}else{
    while($data = mysqli_fetch_array($sql)){
        $iduser = $data['id'];
        $nombres = $data['nombres'];
        $apellidos = $data['apellidos'];
        $tipodocumento = $data['idtd'];
        $documento = $data['documento'];
        $birthday = $data['fechanacimiento'];
        $departamentonacimiento = $data['iddnatal'];
        $ciudadnacimiento = $data['idcnatal'];
        $address = $data['direccion'];
        $departamentoresidencia = $data['iddactual'];
        $ciudadresidencia = $data['idcactual'];
        $email = $data['email'];
        $telefono = $data['telefono'];
        $usuario = $data['usuario'];
        $password = $data['password'];
        $nombredocumento = $data['tipodocumento'];
        $nombreciudadactual = $data['ciudadactual'];
        $nombredepartamentoactual = $data['deptoactual'];
        $nombreciudadnatal = $data['ciudadnatal'];
        $nombredepartamentonatal = $data['deptonatal'];
    }

    
}


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
<script type="text/javascript">

function confirmarActualizar(){
      var respuesta = confirm("¿Deseas CONFIRMAR los datos?");
        if(respuesta == true){
                return true;
        }else{
            return false;
        }
  }
</script>
<body>
<div class="container contenedorregistro " data-namespace="registro">
        <section class="container col-sm-11 principal 
        margin-left: 10px;
        margin-right: 10px;
        ">
            <br>
            <div class="p-1 mb-1  text-white  title bg-success">
            <h3 class=" text-center">Actualizar Datos de Usuarios</h3>
            </div>
         <br>
         <div class="container">
            <form action="actualizar.php" method="POST" id = "formulario" name="formulario" class="formulario">
            <div class="row">
                    <input type="hidden" id="iduser" name="iduser" value="<?php echo $iduser;?>">
                    <div  class="form-group has-feedback col-sm-6">
                        <i class="fa fa-user form-control-feedback"></i>
                        <input type="text" class="form-control" placeholder="Nombres" id="nombres" name="nombres" value="<?php echo $nombres;?>">
                    </div>
                    
                    <div  class="form-group has-feedback col-sm-6">
                        <i class="fa fa-user form-control-feedback"></i>
                        <input type="text" class="form-control" placeholder="Apellidos" id="apellidos" name="apellidos" value="<?php echo $apellidos;?>">
                    </div>

                    <div  class="form-group has-feedback col-sm-6">
                        <select class="form-select" id="tipodocumento" name="tipodocumento" value="<?php echo $tipodocumento;?>">
                        <option selected value="<?php echo $tipodocumento;?>"><?php echo $nombredocumento;?></option>
                            <?php foreach ($ejecutarDocu as $opciones): ?>
                                <option value="<?php echo $opciones['id']?>"><?php echo $opciones['nombre']?></option> 
                            <?php endforeach ?>
                            
                        </select>
                    </div>

                    <div  class="form-group has-feedback col-sm-6">
                        <i class="fa fa-id-card-o form-control-feedback"></i>
                        <input type="number" class="form-control" placeholder="Número de documento" id="documento" name="documento" value="<?php echo $documento;?>">
                    </div>

                    <div  class="form-group has-feedback col-sm-12">
                        <p>Fecha y Lugar de nacimiento:</p>
                        <i class="fa fa-birthday-cake form-control-feedback"></i>
                        <input type="date" class="form-control" placeholder="Fecha de Nacimiento" id="birthday" name="birthday" value="<?php echo $birthday;?>">
                    </div>

                    <div  class="form-group has-feedback col-sm-6">
                        <select class="form-select" id="departamentonacimiento" name="departamentonacimiento" value="<?php echo $departamentonacimiento;?>">
                            <option selected value="<?php echo $departamentonacimiento;?>"><?php echo $nombredepartamentonatal;?></option>
                            <?php foreach ($ejecutarDepto as $opciones): ?>
                            <option value="<?php echo $opciones['id']?>"><?php echo $opciones['nombre']?></option> 
                            <?php endforeach ?>
                                
                          </select>
                    </div>

                    <div  class="form-group has-feedback col-sm-6" id="ciudadnatal">
                        <select class="form-select" id="ciudadnacimiento" name="ciudadnacimiento" value="<?php echo $ciudadnacimiento;?>">
                            <option selected value="<?php echo $ciudadnacimiento;?>"><?php echo $nombreciudadnatal;?></option>
                            <?php foreach ($ejecutarCiu as $opciones): ?>
                            <option value="<?php echo $opciones['id']?>"><?php echo $opciones['nombre']?></option> 
                            <?php endforeach ?>
                          </select>

                    </div> <br>


                    <div  class="form-group has-feedback col-sm-12">
                        <p>Lugar de residencia actual:</p>
                        <i class="fa fa-map-marker  form-control-feedback"></i>
                        <input type="text" class="form-control" placeholder="Dirección" id="address" name="address" value="<?php echo $address;?>">
                    </div>

                    <div  class="form-group has-feedback col-sm-6">
                        <select class="form-select" id="departamentoresidencia" name="departamentoresidencia" value="<?php echo $departamentoresidencia;?>">
                            <option selected value="<?php echo $departamentoresidencia;?>"><?php echo $nombredepartamentoactual;?></option>
                            <?php foreach ($ejecutarDepto as $opciones): ?>
                                <option value="<?php echo $opciones['id']?>"><?php echo $opciones['nombre']?></option> 
                            <?php endforeach ?>
                                
                          </select>
                    </div>

                    <div  class="form-group has-feedback col-sm-6" id="ciudadactual">
                        <select class="form-select" id="ciudadresidencia" name="ciudadresidencia" value="<?php echo $ciudadresidencia;?>">
                            <option selected value="<?php echo $ciudadresidencia;?>"><?php echo $nombreciudadactual?></option>
                            <?php foreach ($ejecutarCiu as $opciones): ?>
                            <option value="<?php echo $opciones['id']?>"><?php echo $opciones['nombre']?></option> 
                            <?php endforeach ?>
                          </select>
                    </div>

                    <div  class="form-group has-feedback col-sm-12">
                        <i class="fa fa-envelope form-control-feedback"></i>
                        <input type="text" class="form-control" placeholder="Email" id="email" name="email" value="<?php echo $email;?>">
                    </div>

                    <div  class="form-group has-feedback col-sm-12">
                        <i class="fa fa-phone form-control-feedback"></i>
                        <input type="number" class="form-control" placeholder="Número de Telefono" id="telefono" name="telefono" value="<?php echo $telefono;?>">
                    </div>

                    <div  class="form-group formulario__grupo  has-feedback col-sm-6" id="grupo__usuario">
                        <i class="fa fa-user form-control-feedback"></i>
                        <div class="formulario__grupo-input">
                            <input type="text" class="form-control" placeholder="Usuario" name = "usuario" id="usuario" value="<?php echo $usuario;?>">
                            <i class="fa fa-times-circle-o formulario__validacion-estado" id="icono"></i>
                        </div>
                        <p class="formulario__input-error">El nombre de usuario debe tener entre 5 a 15 caracteres.</p>
                    </div>
                    
                    
    
                    <div  class="form-group formulario__grupo  has-feedback col-sm-6" id="grupo__password">
                        <i class="fa fa-lock form-control-feedback"></i>
                        <div class="formulario__grupo-input">
                            <input type="password" class="form-control" placeholder="Contraseña" id="password" name="password" value="<?php echo $password;?>">
                            <i class="fa fa-times-circle-o formulario__validacion-estado" id="icono"></i>
                        </div>
                        <p class="formulario__input-error">La contraseña debe tener entre 4 a 12 caracteres.</p>
                    </div>
    
                    
                    <div class="formulario__mensaje col-sm-12 text-center btn-success" id="formulario__mensaje">
                    <p class="formulario__mensaje-exito"><i class="fa fa-check-circle"></i> <b> Registro Éxitoso.</b></p>
                    </div>
                    

                    <div class="col-sm-6 text-center divbotones">
                        <button type="button" class="btn botonvolver" onclick="location.href='../index.php#/listar-usuarios'">Cancelar</button>
                    </div> <br> <br> <br>
    
                    <div class="col-sm-6 text-center divbotones">
                        <input type="submit" name="registrar" class="btn btn-success boton" value="Actualizar Usuario" onclick="return confirmarActualizar()">
                    </div> <br> <br> <br>

                    <div class="formulario__mensaje col-sm-12 text-center btn-danger " id="formulario__mensaje">
                    <p><i class="fa fa-exclamation-triangle"></i> Error: <b>Complete correctamente el formulario de registro.</b></p>
                    </div> <br> <br> <br>
            </div>
            </form>

         </div>
        </section>
    </div> <br><br>

    
</body>
</html>