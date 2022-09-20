<?php include "../model/conexion.php" ?>
<?php include "../model/seleccion.php" ?>

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

    <!-- Sweet Alert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<?php include "../controller/login.php"?>
<div class="container-fluid" style="height: 100vh">
    <div class="row h-100">
        <div class="col col-md-3"></div>
           <div class="conteform col col-md-6">
                    <br><br><br><br><br>
                   <div class="contecard p-5">
                        <div class="card shadow ">
                            <div class="card-header" style="background-color:#0166d0;"><h1 style="color:white;">Inicio de sesion</h1></div>
                            <div class="card-body">
                                <form action="login.php" method="post">
                                    <div class="form-group d-flex">
                                        <select class="form-control w-100" id="exampleFormControlSelect1" name="fktipo_doc">
                                            <option disable>Tipo doc</option>
                                            <?php foreach ($tipo_docs as $tipo_docs) { ?>
                                            <option value="<?php echo $tipo_docs['id'] ?>"><?php echo $tipo_docs['nombre'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" placeholder="Numero de identificacion" id="nif" name="dni">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Contraseña" id="pwd" name="contrasenia">
                                    </div>
                                        <div class="contebuton">
                                            <button id="btnSlider3" type="submit" class="btn btn-outline-primary font-weight-bold mt-4" name="enviar" value="ingresar">Iniciar sesión</button>
                                        </div>
                                            <a href="register.php">¿Aun no tienes cuenta?</a>
                                </form>
                            </div>
                        </div>
                   </div>
                   
           </div>
        <div class="col col-md-3"></div>
        <img src="img/222.png" alt="" class="logogobierno mr-4 mb-4">
    </div>
</div>

</body>
</html>