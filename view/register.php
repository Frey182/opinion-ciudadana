<?php include "../model/conexion.php" ?>
<?php include "../model/seleccion.php" ?>
<?php include "../controller/login.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Popper JS -->
    <link rel="stylesheet" href="css/estiloslogin.css">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/853c6b208c.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container-fluid" style="height: 100vh">
    <div class="row h-100">
        <div class="col col-md-2"></div>
           <div class="conteform col col-md-8">
           <br><br>
                <div class="card shadow rounded">
                    <div class="card-header bg-warning" ><h1 style="color:white;">REGISTRO</h1></div>
                    <div class="card-body">     
                            <form action="register.php" method="post">
                               <!-- Slider 1 del registro -->
                               <div class="slider1" id="slider1">
                                    <div class="row">
                                        <div class="col col-md-8">
                                            
                                            <div class="form-group d-flex">
                                                <select class="form-control w-25 mr-3" id="exampleFormControlSelect1" name="fktipo_doc">
                                                    <option disable>Tipo doc</option>
                                                    <?php foreach ($tipo_docs as $tipo_docs) { ?>
                                                    <option value="<?php echo $tipo_docs['id'] ?>"><?php echo $tipo_docs['nombre'] ?></option>
                                                    <?php } ?>
                                                </select>
                                                <input type="number" class="form-control w-75" placeholder="Ingresa tu numero de identificacion..." id="dni" name="dni">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Primer y segundo nombre</span>
                                                </div>
                                                    <input type="text" aria-label="First name" class="form-control" name="p_nombre">
                                                    <input type="text" aria-label="Last name" class="form-control" name="s_nombre">
                                            </div>
                                        
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Primer y segundo apellido</span>
                                                </div>
                                                    <input type="text" aria-label="First name" class="form-control" name="apellido_p">
                                                    <input type="text" aria-label="Last name" class="form-control" name="apellido_m">
                                            </div>
                                            <div class="form-group d-flex">
                                                <select class="form-control w-50 mr-3" name="fksexo">
                                                    <option disable>Sexo</option>
                                                    <?php foreach ($sexos as $sexo) { ?>
                                                    <option value="<?php echo $sexo['id'] ?>"><?php echo $sexo['nombre'] ?></option>
                                                    <?php } ?>
                                                </select>
                                                <input type="number" class="form-control w-50" placeholder="Telefono celular" id="telefono" name="telefono">
                                            </div>
                                            
                                            <div class="form-group d-flex">
                                                <input type="email" class="form-control w-100" placeholder="Correo" id="correo" name="correo">
                                            </div>  
                                            <div class="form-group d-flex">
                                                <input type="password" class="form-control w-75 mr-3" placeholder="contraseña" id="contrasenia" name="contrasenia">
                                                <input type="password" class="form-control w-75" placeholder="confirmar contraseña" id="confirmContrasenia" name="confirmContrasenia">
                                            </div> 
                                            <div class="paginacion d-flex justify-content-center" style="text-aling:center; font-weight:bold;">
                                                <p class="mr-2">1 de 3</p>
                                                <i class="fa-solid fa-circle-chevron-right" style="font-size:30px; color:#ffc107;" id="btnSlider1"></i>
                                            </div>
                                        </div>
                                            <div class="col col-md-4">
                                                <div class="contelogo mt-3 ">
                                                    <img src="img/logogobierno.png" class="img-fluid" alt="">
                                                </div>
                                                <div class="contebuton mt-3 ">
                                                    <a href="login.php">¿Ya tienes cuenta?</a>
                                                </div>
                                            </div>
                                    </div>
                                </div>

                                <!-- Slider 2 del registro -->
                                <div class="slider2 d-none" id="slider2">
                                    <div class="row">
                                        <div class="col col-md-8">
                                            
                                            <div class="form-group d-flex">
                                                <select class="form-control w-50 mr-3" id="exampleFormControlSelect1" id="municipio" name="fkmunicipio">
                                                    <option disable>Municipio</option>
                                                    <?php foreach ($municipios as $municipio) { ?>
                                                    <option value="<?php echo $municipio['id'] ?>"><?php echo $municipio['nombre'] ?></option>
                                                    <?php } ?>
                                                </select>
                                                <select class="form-control w-50" id="exampleFormControlSelect1" id="barrio" name="fkbarrio">
                                                    <option disable>Barrio/Vereda</option>
                                                    <?php foreach ($barrios as $barrio) { ?>
                                                    <option value="<?php echo $barrio['id'] ?>"><?php echo $barrio['nombre'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div> 
                                            <div class="form-group">
                                                <input type="text" class="form-control w-100" placeholder="Direccion" id="direccion" name="direccion">
                                            </div> 
                                            
                                            <div class="form-group d-flex">
                                                <div class="input-group mr-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Fecha de nacimiento</span>
                                                    </div>
                                                        <input type="date" aria-label="fecha" class="form-control" id="f_nacimiento" name="nacimiento">
                                                </div>
                                                <select class="form-control w-25" id="exampleFormControlSelect1" name="fketnia">
                                                    <option disable>Etnia</option>
                                                    <?php foreach ($etnias as $etnia) { ?>
                                                    <option value="<?php echo $etnia['id'] ?>"><?php echo $etnia['nombre'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control w-100" id="exampleFormControlSelect1" name="discapacidad">
                                                    <option disable>Condicion de discapacidad</option>
                                                    <?php foreach ($discapacidades as $discapacidad) { ?>
                                                    <option value="<?php echo $discapacidad['id'] ?>"><?php echo $discapacidad['nombre'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control w-100" id="exampleFormControlSelect1" name="estrato">
                                                    <option disable>Estrato de residencia</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                </select>
                                            </div>
                                            <div class="paginacion d-flex justify-content-center" style="text-aling:center; font-weight:bold;">
                                                <i class="fa-solid fa-circle-chevron-left" style="font-size:30px; color:#ffc107;" id="btnSliderBack1"></i>
                                                <p class="mr-2 ml-2">2 de 3</p>
                                                <i class="fa-solid fa-circle-chevron-right" style="font-size:30px; color:#ffc107;" id="btnSlider2"></i>
                                            </div>
                                         </div>
                                            <div class="col col-md-4">
                                                <div class="contelogo mt-2 ">
                                                    <img src="img/logogobierno.png" class="img-fluid" alt="">
                                                </div>
                                                <div class="contebuton">
                                                    <!-- <button id="btnSlider2" type="button" class="btn btn-outline-warning font-weight-bold mt-4">Siguiente</button> -->
                                                </div>
                                                <div class="contebuton mt-3 ">
                                                    <a href="login.php">¿Ya tienes cuenta?</a>
                                                </div>
                                            </div>  
                                    </div>
                                </div>






                                <!-- Slider 3 del formulario -->
                                <div class="slider3 d-none" id="slider3">
                                    <div class="row">
                                        <div class="col col-md-8">
                                           
                                            <div class="form-group d-flex">
                                                <select class="form-control w-100" id="exampleFormControlSelect1" name="fknvledu">
                                                    <option disable>Ultimo nivel educativo alcanzado</option>
                                                    <?php foreach ($niveles_educativos as $nivel_educativo) { ?>
                                                    <option value="<?php echo $nivel_educativo['id'] ?>"><?php echo $nivel_educativo['nombre'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            
                                           <div class="contepreguntaform border mb-3 p-3">
                                                <h6>¿Cuenta con acceso a dispositivos tecnologicos?</h6>
                                                <div class="conteradio d-flex justify-content-center ">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="acceso_dispositivo" id="acceso_dispositivo1" value="SI" checked>
                                                        <label class="form-check-label mr-5" for="acesso_dispositivo">
                                                            SI
                                                        </label>
                                                    </div> 
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="acceso_dispositivo" id="acceso_dispositivo2" value="NO">
                                                        <label class="form-check-label" for="acesso_dispositivo">
                                                            NO
                                                        </label>
                                                    </div> 
                                                </div>
                                           </div>
                                           <div class="contepreguntaform border mb-3 p-3">
                                                <h6>Si la respuesta anterior es SI, ¿Cual o cuales?</h6>
                                                <div class="conteradio d-flex justify-content-around ">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="T.Movil" id="defaultCheck1" name="dispositivo">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            T.Movil
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Computador" id="defaultCheck1" name="dispositivo">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Computador
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="Tablet" id="defaultCheck1" name="dispositivo">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Tablet
                                                        </label>
                                                    </div>
                                                </div>
                                           </div>
                                           <div class="contepreguntaform border mb-3 p-3">
                                                <h6>¿Cuenta con conectividad a internet?</h6>
                                                <div class="conteradio d-flex justify-content-center ">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="internet" id="exampleRadios1" value="SI" checked>
                                                        <label class="form-check-label mr-5" for="exampleRadios1">
                                                            SI
                                                        </label>
                                                    </div> 
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="internet" id="exampleRadios2" value="NO">
                                                        <label class="form-check-label" for="exampleRadios2">
                                                            NO
                                                        </label>
                                                    </div> 
                                                </div>
                                           </div>
                                           <div class="paginacion d-flex justify-content-center" style="text-aling:center; font-weight:bold;">
                                                <i class="fa-solid fa-circle-chevron-left" style="font-size:30px; color:#ffc107;" id="btnSliderBack2"></i>
                                                <p class="ml-2">3 de 3</p>
                                            </div>
                                        </div>
                                            <div class="col col-md-4">
                                                <div class="contepreguntaform border mb-1 p-3">
                                                    <h6>Tipo de regimen de afiliacion</h6>
                                                    <div class="conteradio d-flex justify-content-center ">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="regimen" id="exampleRadios1" value="subsidiado" checked>
                                                            <label class="form-check-label mr-5" for="exampleRadios1">
                                                                Subsidiado
                                                            </label>
                                                        </div> 
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="regimen" id="exampleRadios2" value="contributivo">
                                                            <label class="form-check-label" for="exampleRadios2">
                                                                Contributivo
                                                            </label>
                                                        </div> 
                                                    </div>
                                                </div>
                                                <div class="contelogo mt-3 ">
                                                    <img src="img/logogobierno.png" class="img-fluid" alt="">
                                                </div>
                                                <div class="contebuton">
                                                    <button type="submit" class="btn btn-outline-warning font-weight-bold mt-4" name="enviar" value="registrarse">REGISTRARSE</button>
                                                </div>
                                                    <a href="login.php">¿Ya tienes cuenta?</a>
                                            </div>  
                                    </div>
                                </div>
                            </form>
                          
                       </div>
                    </div>
                </div>
               
           </div>
        <div class="col col-md-2"></div>
    </div>
</div>
<script src="js/sliderregister.js"></script>
</body>
</html>