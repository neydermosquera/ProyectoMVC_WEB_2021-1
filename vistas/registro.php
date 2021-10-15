<!--Div Registro!-->

<div class="container contenedorregistro" data-namespace="inicio">
        <section class="container col-sm-7 principal">
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