<div class="container contenedorregistro " data-namespace="registro">
        <section class="container col-sm-11 principal 
        margin-left: 10px;
        margin-right: 10px;
        ">
            <br>
            <div class="p-1 mb-1  text-white title">
            <h3 class=" text-center">Actualizar Datos de Usuarios</h3>
            </div>
         <br>
         <div class="container">
            <form action="index.php#/registrar-usuario" method="POST" id = "formulario" name="formulario" class="formulario">
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
                        <option selected>Tipo de Documento de Identidad</option>
                            <?php foreach ($ejecutarDocu as $opciones): ?>
                                <option value="<?php echo $opciones['id']?>"><?php echo $opciones['nombre']?></option> 
                            <?php endforeach ?>
                            
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
                            <?php foreach ($ejecutarDepto as $opciones): ?>
                            <option value="<?php echo $opciones['id']?>"><?php echo $opciones['nombre']?></option> 
                            <?php endforeach ?>
                                
                          </select>
                    </div>

                    <div  class="form-group has-feedback col-sm-6" id="ciudadnatal">
                        <select class="form-select" id="ciudadnacimiento" name="ciudadnacimiento">
                            <option value="">Ciudad</option>
                            <?php foreach ($ejecutarCiu as $opciones): ?>
                            <option value="<?php echo $opciones['id']?>"><?php echo $opciones['nombre']?></option> 
                            <?php endforeach ?>
                          </select>

                    </div> <br>


                    <div  class="form-group has-feedback col-sm-12">
                        <p>Lugar de residencia actual:</p>
                        <i class="fa fa-map-marker  form-control-feedback"></i>
                        <input type="text" class="form-control" placeholder="Dirección" id="address" name="address">
                    </div>

                    <div  class="form-group has-feedback col-sm-6">
                        <select class="form-select" id="departamentoresidencia" name="departamentoresidencia">
                            <option value="">Departamento</option>
                            <?php foreach ($ejecutarDepto as $opciones): ?>
                                <option value="<?php echo $opciones['id']?>"><?php echo $opciones['nombre']?></option> 
                            <?php endforeach ?>
                                
                          </select>
                    </div>

                    <div  class="form-group has-feedback col-sm-6" id="ciudadactual">
                        <select class="form-select" id="ciudadresidencia" name="ciudadresidencia">
                            <option selected>Ciudad</option>
                            <?php foreach ($ejecutarCiu as $opciones): ?>
                            <option value="<?php echo $opciones['id']?>"><?php echo $opciones['nombre']?></option> 
                            <?php endforeach ?>
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
                    
                    <div class="formulario__mensaje col-sm-12 text-center btn-success" id="formulario__mensaje">
                    <p class="formulario__mensaje-exito"><i class="fa fa-check-circle"></i> <b> Registro Éxitoso.</b></p>
                    </div>
                    

                    <div class="col-sm-6 text-center divbotones">
                        <button type="button" class="btn botonvolver" onclick="location.href='#inicio.html'">Cancelar/Volver</button>
                    </div> <br> <br> <br>
    
                    <div class="col-sm-6 text-center divbotones">
                        <input type="submit" name="registrar" class="btn btn-success boton">
                    </div> <br> <br> <br>

                    <div class="formulario__mensaje col-sm-12 text-center btn-danger " id="formulario__mensaje">
                    <p><i class="fa fa-exclamation-triangle"></i> Error: <b>Complete correctamente el formulario de registro.</b></p>
                    </div> <br> <br> <br>
            </div>
            </form>
            <?php include "registrar.php" ?>
         </div>
        </section>
    </div>