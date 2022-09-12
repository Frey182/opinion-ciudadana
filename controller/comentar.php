<?php

if ($_POST) {

    if (isset($_POST['comentar'])) {

        $btn = $_POST['comentar'];
        $descripcion = $_POST['descripcion'];
        $dni = $_SESSION['dni'];

        $objConexion = new Conexion();
        $sql = "INSERT INTO `comentario` (`id`, `descripcion`, `id_usu`) VALUES (NULL, '$descripcion', '$dni')";
        $objConexion->ejecutar($sql);

    }

}

?>