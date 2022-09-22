<?php

if ($_POST) {

    if  (isset($_POST['enviar'])) {

        if($_POST['enviar'] == 'resencuesta') {
            
            $id_encuesta = $_POST['idtema'];
            $id_usuario = $_POST['usuario'];
            $opcion = $_POST['opcion'];
            
            $objConexion = new Conexion();
            $sql = "INSERT INTO `encuesta_usuario` (`id`, `id_usuario`, `id_encuesta`, `respuestas`) VALUES (NULL, '$id_usuario', '$id_encuesta', '$opcion')";
            $objConexion->ejecutar($sql);

            ?>
            <script> location.href="index.php"; </script>
            <?php

        }

    }

}

?>