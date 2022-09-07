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
</head>
<body>
<div class="container-fluid" style="height: 100vh">
    <div class="row h-100">
        <div class="col col-md-2"></div>
           <div class="conteform col col-md-8">
           <br>
                <div class="card shadow rounded">
                    <div class="card-header bg-warning" ><h1 style="color:white;">REGISTRO</h1></div>
                    <div class="card-body">     
                            <form action="register.php">
                               <!-- Slider 1 del registro -->
                               <div class="slider1">
                                    <div class="row">
                                        <div class="col col-md-8">
                                            <h4>IDENTIFICACION</h4>
                                            <div class="form-group d-flex">
                                                <select class="form-control w-25 mr-3" id="exampleFormControlSelect1" name="fktipo_doc">
                                                    <option disable>Tipo doc</option>
                                                    <option>Cedula de ciudadania</option>
                                                    <option>Tarjeta de identidad</option>
                                                    <option>Cedula de extranjeria</option>
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
                                                <select class="form-control w-25" name="fksexo">
                                                    <option disable>Sexo</option>
                                                    <option>Masculino</opton>
                                                    <option>Femenino</option>
                                                    <option>Otro</option>
                                                </select>
                                            </div>
                                            <h4>CONTACTO</h4>
                                            <div class="form-group d-flex">
                                                <input type="number" class="form-control w-25 mr-3" placeholder="Telefono celular" id="telefono" name="telefono">
                                                <input type="email" class="form-control w-75" placeholder="Correo" id="correo" name="correo">
                                            </div>  
                                            <div class="paginacion" style="text-aling:center; font-weight:bold;">
                                                <p>1 de 3</p>
                                            </div>
                                        </div>
                                            <div class="col col-md-4">
                                                <div class="contelogo mt-5 ">
                                                    <img src="img/logogobierno.png" style="width:200px; height:200px;" alt="">
                                                </div>
                                                <div class="contebuton">
                                                    <button type="submit" class="btn btn-outline-warning font-weight-bold mt-4">Siguiente</button>
                                                </div>
                                                    <a href="">¿Ya tienes cuenta?</a>
                                            </div>  
                                    </div>
                                </div>



                                <!-- Slider 2 del registro -->
                                <div class="slider2">
                                    <div class="row">
                                        <div class="col col-md-8">
                                            <h4>GEOGRAFICAS</h4>
                                            <div class="form-group d-flex">
                                                <input type="text" class="form-control w-50 mr-3" placeholder="Municipio" id="municipio" name="fkmunicipio">
                                                <input type="text" class="form-control w-50" placeholder="Barrio/Vereda" id="barrio" name="fkbarrio">
                                            </div> 
                                            <div class="form-group">
                                                <input type="text" class="form-control w-100" placeholder="Direccion" id="direccion" name="direccion">
                                            </div> 
                                            <h4>ENFOQUE DIFERENCIAL</h4>
                                            <div class="form-group d-flex">
                                                <input type="date" class="form-control w-75" placeholder="Fecha de nacimiento" id="f_nacimiento" name="nacimiento">
                                                <select class="form-control w-25 mr-3" id="exampleFormControlSelect1" name="fketnia">
                                                    <option disable>Etnia</option>
                                                    <option>...</option>
                                                    <option>...</option>
                                                    <option>...</option>
                                                    <option>...</option>
                                                    <option>...</option>
                                                    <option>...</option>
                                                    <option>...</option>
                                                </select>
                                            </div>
                                            <h4>ENFOQUE POBLACIONAL</h4>
                                            <div class="form-group">
                                                <select class="form-control w-100" id="exampleFormControlSelect1" name="discapacidad">
                                                    <option disable>Condicion de discapacidad</option>
                                                    <option>...</option>
                                                    <option>...</option>
                                                    <option>...</option>
                                                    <option>...</option>
                                                    <option>...</option>
                                                    <option>...</option>
                                                    <option>...</option>
                                                </select>
                                            </div>
                                            <h4>SOCIOECONOMICO</h4>
                                            <div class="form-group">
                                                <select class="form-control w-100" id="exampleFormControlSelect1" name="estrato">
                                                    <option disable>Estrato de residencia</option>
                                                    <option>...</option>
                                                    <option>...</option>
                                                    <option>...</option>
                                                    <option>...</option>
                                                    <option>...</option>
                                                    <option>...</option>
                                                    <option>...</option>
                                                </select>
                                            </div>
                                            <div class="paginacion" style="text-aling:center; font-weight:bold;">
                                                <p>2 de 3</p>
                                            </div>
                                         </div>
                                            <div class="col col-md-4">
                                                <div class="contelogo mt-5 ">
                                                    <img src="img/logogobierno.png" style="width:200px; height:200px;" alt="">
                                                </div>
                                                <div class="contebuton">
                                                    <button type="submit" class="btn btn-outline-warning font-weight-bold mt-4">Siguiente</button>
                                                </div>
                                                    <a href="">¿Ya tienes cuenta?</a>
                                            </div>  
                                    </div>
                                </div>






                                <!-- Slider 3 del formulario -->
                                <div class="slider3">
                                    <div class="row">
                                        <div class="col col-md-8">
                                            <h4>ESCOLARIDAD</h4>
                                            <div class="form-group d-flex">
                                                <select class="form-control w-100 mr-3" id="exampleFormControlSelect1" name="fknvledu">
                                                    <option disable>Ultimo nivel educativo alcanzado</option>
                                                    <option>...</option>
                                                    <option>...</option>
                                                    <option>...</option>
                                                    <option>...</option>
                                                    <option>...</option>
                                                    <option>...</option>
                                                </select>
                                            </div>
                                            
                                           <div class="contepreguntaform border mb-3 p-3">
                                                <h6>¿Cuenta con acceso a dispositivos tecnologicos?</h6>
                                                <div class="conteradio d-flex justify-content-center ">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                                        <label class="form-check-label mr-5" for="acesso_dispositivo">
                                                            SI
                                                        </label>
                                                    </div> 
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
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
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="dispositivo">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            T.Movil
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="dispositivo">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Computador
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="dispositivo">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Tablet
                                                        </label>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control w-75 m-auto" placeholder="¿Otro?, ¿Cual?" id="telefono" name="dispositivo">
                                           </div>
                                           <div class="contepreguntaform border mb-3 p-3">
                                                <h6>¿Cuenta con conectividad a internet?</h6>
                                                <div class="conteradio d-flex justify-content-center ">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="internet" id="exampleRadios1" value="option1" checked>
                                                        <label class="form-check-label mr-5" for="exampleRadios1">
                                                            SI
                                                        </label>
                                                    </div> 
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="internet" id="exampleRadios2" value="option2">
                                                        <label class="form-check-label" for="exampleRadios2">
                                                            NO
                                                        </label>
                                                    </div> 
                                                </div>
                                           </div>
                                            <div class="paginacion" style="text-aling:center; font-weight:bold;">
                                                <p>3 de 3</p>
                                            </div>
                                        </div>
                                            <div class="col col-md-4">
                                                <h4>SALUD</h4>
                                                <div class="contepreguntaform border mb-1 p-3">
                                                    <h6>Tipo de regimen de afiliacion</h6>
                                                    <div class="conteradio d-flex justify-content-center ">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="regimen" id="exampleRadios1" value="option1" checked>
                                                            <label class="form-check-label mr-5" for="exampleRadios1">
                                                                Subsidiado
                                                            </label>
                                                        </div> 
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="regimen" id="exampleRadios2" value="option2">
                                                            <label class="form-check-label" for="exampleRadios2">
                                                                Contributivo
                                                            </label>
                                                        </div> 
                                                    </div>
                                                </div>
                                                <div class="contelogo mt-3 ">
                                                    <img src="img/logogobierno.png" style="width:200px; height:200px;" alt="">
                                                </div>
                                                <div class="contebuton">
                                                    <button type="submit" class="btn btn-outline-warning font-weight-bold mt-4">REGISTRARSE</button>
                                                </div>
                                                    <a href="">¿Ya tienes cuenta?</a>
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
</body>
</html>