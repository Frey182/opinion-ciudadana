<?php

if ($_POST) {

    if (isset($_POST['enviar'])) {

        $select = $_POST['tipo_publi'];
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $dni = $_SESSION['dni'];

        date_default_timezone_set('America/Bogota');
        $fecha = date('Y/j/M');

        $objConexion = new Conexion();

        switch ($select) {

            case 'publicacion':
                $sql = "INSERT INTO `tema` (`id`, `nombre`, `descripcion`, `imagen`, `fecha`, `fkusuario`) VALUES (NULL, '$nombre', '$descripcion', 'imagen', '$fecha', '$dni')";
                // llamamos al método ejecutar de conexion
                $objConexion->ejecutar($sql);
                ?>
                <script>

                    Swal.fire({
                        icon: 'success',
                        title: 'Realizado',
                        text: 'Tu publicacion se ha subido exitosamente',
                        })

                    setTimeout(function(){
                        location.href="index.php"
                    } , 1000);  

                </script>
                <?php
                break;
                case 'encuesta':
                    $sql = "INSERT INTO `encuesta` (`id`, `nombre`, `descripcion`, `imagen`, `n_votos`, `fecha`, `fkusuario`) VALUES (NULL, '$nombre', '$descripcion', 'imagen', '0', '$fecha', '$dni')";
                    // llamamos al método ejecutar de conexion
                    $objConexion->ejecutar($sql);
                    ?>
                    <script>
    
                        Swal.fire({
                            icon: 'success',
                            title: 'Realizado',
                            text: 'Tu encuesta se ha subido exitosamente',
                            })
    
                        setTimeout(function(){
                            location.href="index.php"
                        } , 1000);  
    
                    </script>
                    <?php
                    break;


        }

    }

}

?> 