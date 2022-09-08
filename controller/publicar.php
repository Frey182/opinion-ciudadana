<?php

if ($_POST) {

    if (isset($_POST['enviar'])) {

        $btn = $_POST['enviar'];
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $dni = $_SESSION['dni'];
        $objConexion = new Conexion();

        switch ($btn) {

            case 'publicartema':
                $sql = "INSERT INTO `tema` (`id`, `nombre`, `descripcion`, `imagen`, `fkusuario`) VALUES (NULL, '$nombre', '$descripcion', 'imagen', '$dni')";
                // llamamos al método ejecutar de conexion
                $objConexion->ejecutar($sql);

        }

    }

}

?> 