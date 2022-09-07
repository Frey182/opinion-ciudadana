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
           <br><br><br>
                <div class="card shadow rounded">
                    <div class="card-header bg-warning" ><h1 style="color:white;">REGISTRO</h1></div>
                    <div class="card-body">     
                            <form action="register.php">
                                <div class="slider1">
                                    <div class="row">
                                        <div class="col col-md-8">
                                            <h4>IDENTIFICACION</h4>
                                            <div class="form-group d-flex">
                                                <select class="form-control w-25 mr-3" id="exampleFormControlSelect1" name="tipo_doc">
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
                                                <select class="form-control w-25" name="sexo">
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
                                                <a href="">¿Ya tienes cuenta?</a>
                                                <button type="submit" class="btn btn-outline-warning font-weight-bold mt-4">Iniciar sesion</button>
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