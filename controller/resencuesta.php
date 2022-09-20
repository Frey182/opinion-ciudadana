<?php

if ($_POST) {

    if  ((isset($_POST['enviar'])) {

        if($_POST['enviar'] == 'resenviar'))
        $objConexion = new Conexion();

        $id_encuesta = $_POST['idtema'];
        $id_usuario = $_SESSION['usuario'];
        $opcion = $_POST['opcion'];

        $sql = "INSERT INTO `encuesta_usuario` (`id`, `id_usuario`, `id_encuesta`, `respuestas`) VALUES (NULL, $id_usuario, '$id_encuesta', $opcion)";
        $objConexion->ejecutar($sql);

    }

}

?>