<?php include "model/conexion.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opinión ciudadana</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- CSS-->
    <link rel="stylesheet" href="view/css/estilos.css">

    <!-- Font Awesome-->
    <script src="https://kit.fontawesome.com/853c6b208c.js" crossorigin="anonymous"></script>

     <!-- Sweet Alert -->
     <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body style="background-color: #EEF2E6">
<?php include "controller/login.php"?>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:  #449aff;">
                <a class="navbar-brand mr-5" href="#" style="color:white;">Opinion Ciudadana</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
            <div class="collapse navbar-collapse w-100 d-flex justify-content space-around" id="navbarSupportedContent">
                <form class="form-inline my-2 my-lg-0 ml-5 w-75 d-flex space-around">
                    <div class="contebarra" style="width:90%">
                        <input class="form-control  w-100" type="search" placeholder="Buscar" aria-label="Search">
                    </div> 
                    <div class="conteiconobusqueda" style="width:10%">
                        <button type="submit" class="btn btn-outline-light font-weight-bold w-75 ml-3"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </form>
                    <div class="conteoptions d-flex justify-content-around ml-4">
                        <div class="dropdown ml-2">
                            <button class="btn dropdown-toggle " type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa-solid fa-user" style="color:white;"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu2">
                                <div class="contedatos d-flex">
                                    <div class="fondo rounded-circle d-flex justify-content-center align-items-center mr-2 ml-2" style="width:50px; height:50px; background-color:  #449aff;">
                                        <h1 class="m-auto text-dark">
                                            <?php 
                                                $nombre=$_SESSION['nombre'];
                                                echo $nombre[0];
                                            ?>
                                        </h1>
                                    </div>
                                    <div class="text mr-1">
                                    <h6><?php echo $_SESSION['nombre'] ?></h6>
                                    <p><?php echo $_SESSION['correo'] ?></p>
                                    </div>
                                </div>
                               <div class="conteaccion">
                                    <div class="d-flex">
                                        <button class="dropdown-item text-align-left" type="button">Configuracion </button><i class="fa-solid fa-gear text-right mt-2 mr-3"></i>
                                    </div>
                                    <div class="d-flex">
                                        <form action="index.php" method="post" class="d-flex w-100">
                                        <button class="dropdown-item text-align-left" type="submit" name="enviar" value="logout">Cerrar sesion </button><i class="fa-solid fa-arrow-right-from-bracket  text-right mt-2 mr-3"></i>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if($_SESSION['tipo_usu']=="administrador"){ ?>
                            <div class="dropdown ml-2">
                                <button class="btn dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa-solid fa-user" style="color:white;"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu2">
                                    <button class="dropdown-item" type="button"><a href="resultados.php">Resultados</a></button>
                                    <button class="dropdown-item" type="button">Another action</button>
                                    <button class="dropdown-item" type="button">Something else here</button>
                                </div>
                            </div>
                        <?php } ?>
                        <div class="dropdown ml-2">
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa-solid fa-user" style="color:white;"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu2">
                                <button class="dropdown-item" type="button">Action</button>
                                <button class="dropdown-item" type="button">Another action</button>
                                <button class="dropdown-item" type="button">Something else here</button>
                            </div>
                        </div>
                    </div>
        </div>
    </nav>
    <div class="container p-5 w-75" style="height:100vh;">