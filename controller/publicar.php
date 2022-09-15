<?php

if ($_POST) {

    if (isset($_POST['enviar'])) {

        $select = $_POST['tipo_publi'];
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $dni = $_SESSION['dni'];
        $opcion1 = $_POST['opcion1'];
        $opcion2 = $_POST['opcion2'];
        $opcion3 = $_POST['opcion3'];

        $id_tema = $temas[0]['id'];
        $sexo = $_POST['publico'];
        $edad = $_POST['edad'];
        $municipio = $_POST['municipio'];
        $barrio = $_POST['barrio'];
        $etnia = $_POST['etnia'];
        $discapacidad = $_POST['discapacidad'];
        $estrato = $_POST['estrato'];
        $nvl_edu = $_POST['nvledu'];
        $regimen = $_POST['regimen'];

        date_default_timezone_set('America/Bogota');
        $fecha = date('Y/j/M');

        $objConexion = new Conexion();

        switch ($select) {

            case 'publicacion':
                $sql = "INSERT INTO `tema` (`id`, `nombre`, `descripcion`, `imagen`, `fecha`, `fkusuario`) VALUES (NULL, '$nombre', '$descripcion', 'imagen', '$fecha', '$dni')";
                // llamamos al método ejecutar de conexion
                $objConexion->ejecutar($sql);
                $sqlcondiciones = "INSERT INTO `condicion` (`id`, `sexo`, `edad`, `municipio`, `barrio`, `etnia`, `discapacidad`, `estrato`, `nivel_edu`, `regimen`, `id_tema`) VALUES (NULL, '$sexo', '$edad', '$municipio', '$barrio', '$etnia', '$discapacidad', '$estrato', '$nvl_edu', '$regimen ', '$id_tema')";
                // llamamos al método ejecutar de conexion
                $objConexion->ejecutar($sqlcondiciones);
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
                    $sql = "INSERT INTO `encuesta` (`id`, `nombre`, `descripcion`, `imagen`, `fecha`, `opcion1`, `opcion2`, `opcion3`, `fkusuario`) VALUES (NULL, '$nombre', '$descripcion', 'imagen', '$fecha', '$opcion1', '$opcion2', '$opcion3', '$dni')";
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