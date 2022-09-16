<?php

if ($_POST) {

    if (isset($_POST['comentar'])) {

        $btn = $_POST['comentar'];
        
        if ($btn == "comentar") {

            $descripcion = $_POST['descripcion'];
            $tema = $_POST['tema'];
            $dni = $_SESSION['dni'];

            $objConexion = new Conexion();
            $sql = "INSERT INTO `comentario` (`id`, `descripcion`, `id_usu`, `id_tema`) VALUES (NULL, '$descripcion', '$dni', '$tema')";
            $objConexion->ejecutar($sql);

            ?>
            <script>

                location.href="index.php"

            </script>
            <?php

        }

    }

}

?>