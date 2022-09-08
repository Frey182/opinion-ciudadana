<?php

if ($_POST) {

    if (isset($_POST['enviar'])) {

        $btn = $_POST['enviar'];
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $dni = $_SESSION['dni'];

        date_default_timezone_set('America/Bogota');
        $fecha = date('Y/j/M');

        $objConexion = new Conexion();

        switch ($btn) {

            case 'publicartema':
                $sql = "INSERT INTO `tema` (`id`, `nombre`, `descripcion`, `imagen`, `fecha`, `fkusuario`) VALUES (NULL, '$nombre', '$descripcion', 'imagen', '$fecha', '$dni')";
                // llamamos al método ejecutar de conexion
                $objConexion->ejecutar($sql);
                header('location: index.php');
                break;

        }

    }

}

?> 