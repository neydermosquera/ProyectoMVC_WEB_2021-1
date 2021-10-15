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

   
    <div class="container  contenedorinicio" data-namespace="inicio">
        <div class="row inicio">
            <div class="col-5 textoinicio">
                <h1>SPA WEB</h1><br>
                <p class="parrafo">Proyecto desarrollado para la asignatura Programación en la Web. <br>

                </p>
            </div>
            <div class="col-7">
                <img src="images/19362653.jpg" alt="" width="600px">
            </div>
       
        </div>
    </div>



    <div class="container contenedorregistro" data-namespace="registro">
        <section class="container col-sm-11 principal 
        margin-left: 10px;
        margin-right: 10px;
        ">
            <br>
            <div class="p-1 mb-1  text-white title">
            <h3 class=" text-center">Registro de Usuario</h3>
            </div>
         <br>
         <div class="container">
            <form action="" method="POST" id = "formulario" name="formulario" class="formulario">
            <div class="row">

                    <div  class="form-group has-feedback col-sm-6">
                        <i class="fa fa-user form-control-feedback"></i>
                        <input type="text" class="form-control" placeholder="Nombres" id="nombres" name="nombres">
                    </div>
                    
                    <div  class="form-group has-feedback col-sm-6">
                        <i class="fa fa-user form-control-feedback"></i>
                        <input type="text" class="form-control" placeholder="Apellidos" id="apellidos" name="apellidos">
                    </div>

                    <div  class="form-group has-feedback col-sm-6">
                        <select class="form-select" id="tipodocumento" name="tipodocumento">
                            <option selected>Tipo de documento de Identidad</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                    </div>

                    <div  class="form-group has-feedback col-sm-6">
                        <i class="fa fa-id-card-o form-control-feedback"></i>
                        <input type="number" class="form-control" placeholder="Número de documento" id="documento" name="documento">
                    </div>

                    <div  class="form-group has-feedback col-sm-12">
                        <p>Fecha y Lugar de nacimiento:</p>
                        <i class="fa fa-birthday-cake form-control-feedback"></i>
                        <input type="date" class="form-control" placeholder="Fecha de Nacimiento" id="birthday" name="birthday" value="">
                    </div>

                    <div  class="form-group has-feedback col-sm-6">
                        <select class="form-select" id="departamentonacimiento" name="departamentonacimiento">
                            <option selected>Departamento</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                    </div>

                    <div  class="form-group has-feedback col-sm-6">
                        <select class="form-select" id="ciudadnacimiento" name="ciudadnacimiento">
                            <option selected>Ciudad</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                    </div> <br>


                    <div  class="form-group has-feedback col-sm-12">
                        <p>Lugar de residencia actual:</p>
                        <i class="fa fa-map-marker  form-control-feedback"></i>
                        <input type="text" class="form-control" placeholder="Dirección" id="address" name="address">
                    </div>

                    <div  class="form-group has-feedback col-sm-6">
                        <select class="form-select" id="departamentoresidencia" name="departamentoresidencia">
                            <option selected>Departamento</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                    </div>

                    <div  class="form-group has-feedback col-sm-6">
                        <select class="form-select" id="ciudadresidencia" name="ciudadresidencia">
                            <option selected>Ciudad</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                    </div>

                    <div  class="form-group has-feedback col-sm-12">
                        <i class="fa fa-envelope form-control-feedback"></i>
                        <input type="text" class="form-control" placeholder="Email" id="email" name="email">
                    </div>

                    <div  class="form-group has-feedback col-sm-12">
                        <i class="fa fa-phone form-control-feedback"></i>
                        <input type="number" class="form-control" placeholder="Número de Telefono" id="telefono" name="telefono">
                    </div>

                    <div  class="form-group formulario__grupo  has-feedback col-sm-6" id="grupo__usuario">
                        <i class="fa fa-user form-control-feedback"></i>
                        <div class="formulario__grupo-input">
                            <input type="text" class="form-control" placeholder="Usuario" name = "usuario" id="usuario">
                            <i class="fa fa-times-circle-o formulario__validacion-estado" id="icono"></i>
                        </div>
                        <p class="formulario__input-error">El nombre de usuario debe tener entre 5 a 15 caracteres.</p>
                    </div>
                    
                    <div  class="form-group formulario__grupo  has-feedback col-sm-6" id="grupo__usuario2">
                        <i class="fa fa-user form-control-feedback"></i>
                        <div class="formulario__grupo-input">
                            <input type="text" class="form-control" placeholder="Confirmar Usuario" name = "usuario2" id="usuario2">
                            <i class="fa fa-times-circle-o formulario__validacion-estado" id="icono"></i>
                        </div>
                        <p class="formulario__input-error">El nombre de usuario no conincide.</p>
                    </div>
    
                    <div  class="form-group formulario__grupo  has-feedback col-sm-6" id="grupo__password">
                        <i class="fa fa-lock form-control-feedback"></i>
                        <div class="formulario__grupo-input">
                            <input type="password" class="form-control" placeholder="Contraseña" id="password" name="password">
                            <i class="fa fa-times-circle-o formulario__validacion-estado" id="icono"></i>
                        </div>
                        <p class="formulario__input-error">La contraseña debe tener entre 4 a 12 caracteres.</p>
                    </div>
    
                    <div  class="form-group formulario__grupo  has-feedback col-sm-6" id="grupo__password2">
                        <i class="fa fa-lock form-control-feedback"></i>
                        <div class="formulario__grupo-input">
                            <input type="password" class="form-control" placeholder=" Confirmar Contraseña" id="password2" name="password2">
                            <i class="fa fa-times-circle-o formulario__validacion-estado" id="icono"></i>
                        </div>
                        <p class="formulario__input-error">Las contraseñas no coninciden.</p>
                    </div>

                    <div class="formulario__mensaje col-sm-12 text-center btn-danger" id="formulario__mensaje">
                        <p><i class="fa fa-exclamation-triangle"></i> Error: <b>Complete correctamente el formulario de registro.</b></p>
                    </div> <br> <br> <br>

                    <div class="col-sm-6 text-center">
                        <button type="button" class="btn btn-danger botonvolver" onclick="location.href='index.html'">Cancelar/Volver</button>
                    </div> <br> <br> <br>
    
                    <div class="col-sm-6 text-center">
                        <button type="submit" class="btn btn-success boton">Registrar</button>
                    </div> <br> <br> <br>

                    <div class="formulario__mensaje col-sm-12 text-center btn-success" id="formulario__mensaje">
                        <p class="formulario__mensaje-exito"><i class="fa fa-check-circle"></i> <b> Registro Éxitoso.</b></p>
                    </div> 

            </div>
            </form>
         </div>
        </section>
    </div>
    
    <!--LISTAR-->

    <div class="container-fluid contenedorlistado" data-namespace="registro">
    
                    <div class="contenido">
                        <h2>Datos registrados</h2> <br><br>
                        <div class="row">
                        </div><!--Cierre botones-->

                        <table class="table table-striped">
                            <thead>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>T.D</th>
                                <th>Documento</th>
                                <th>Dirección</th>
                                <th>Ciudad</th>
                                <th>Departamento</th>
                                <th>Fecha Nacimiento</th>
                                <th>Ciudad Natal</th>
                                <th>Depto Natal</th>
                                <th>Email</th>
                                <th>Telefono</th>
                                <th>Usuario</th>
                                <th>Acción</th>
                            </thead>
                            <tbody id="respuesta">
                                <tr>
                                <td>Nombres</td>
                                <td>Apellidos</td>
                                <td>T.D</td>
                                <td>Documento</td>
                                <td>Dirección</td>
                                <td>Ciudad</td>
                                <td>Departamento</td>
                                <td>Fecha Nacimiento</td>
                                <td>Ciudad Natal</td>
                                <td>Depto Natal</td>
                                <td>Email</td>
                                <td>Telefono</td>
                                <td>Usuario</td>
                                <td>Acción</td>
                               </tr> 
                            </tbody>

                        </table> <br><br>

                        <div class="col-sm-12 text-center">
                            <button type="button" class="btn btn-danger botonvolver" onclick="location.href='index.html'">Volver</button>
                        </div> 

                    </div>

    </div>









        <!-- Footer -->
    <footer class="bg-dark text-center text-white pie">
   
          
            <div class="col-auto">
              
              <button type="submit" class="btn btn-outline-light mb-4">
                Subscribe
              </button>
            </div>
         
          </div>
 
        </form>
      </section>
      <!-- Section: Form -->
  
      <!-- Section: Text -->
      <section class="mb-4">
        <p>
          Universidad Industrial de Santander - Facultad de Ingenierías Fisicomecánicas - Escuela de Ingeniería de Sistemas e informatica 
          <br>
           Programación en la Web - SystemFest 2021.
        </p>
      </section>
      <!-- Section: Text -->
  
      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        
          
  

    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2021 Bucaramanga - Santander

  </footer>
  <!-- Footer -->
   


    <script src="main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="validacion.js"></script>
</body>
</html>