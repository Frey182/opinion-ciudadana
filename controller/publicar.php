<?php

if ($_POST) {

    if (isset($_POST['enviar'])) {

        if ($_POST['enviar'] == "publicar" ) {

            $select = $_POST['tipo_publi'];
            $nombre = $_POST['nombre'];
            $descripcion = $_POST['descripcion'];
            $dni = $_SESSION['dni'];
    
            $opcion1 = $_POST['opcion1'];
            $opcion2 = $_POST['opcion2'];
            $opcion3 = $_POST['opcion3'];
    
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
            
            $sql = "INSERT INTO `tema` (`id`, `tipo_tema`, `nombre`, `descripcion`, `imagen`, `fecha`, `fkusuario`) VALUES (NULL, '$select', '$nombre', '$descripcion', 'imagen', '$fecha', '$dni')";
            // llamamos al método ejecutar de conexion
            $objConexion->ejecutar($sql);
            
            $temas = "SELECT * FROM tema INNER JOIN usuario ON tema.fkusuario = usuario.dni ORDER BY id DESC;";
            $temas = $objConexion->consultar($temas);
    
            $id_tema = $temas[0]['id'];
    
            $sqlcondiciones = "INSERT INTO `condicion` (`id`, `sexo`, `edad`, `municipio`, `barrio`, `etnia`, `discapacidad`, `estrato`, `nivel_edu`, `regimen`, `id_tema`) VALUES (NULL, '$sexo', '$edad', '$municipio', '$barrio', '$etnia', '$discapacidad', '$estrato', '$nvl_edu', '$regimen ', '$id_tema')";
            // llamamos al método ejecutar de conexion
            $objConexion->ejecutar($sqlcondiciones);
    
            if ($select == "encuesta") {
    
                $sqlopcion_encuesta = "INSERT INTO `opcion_encuesta` (`id`, `opcion1`, `opcion2`, `opcion3`, `tema_id`) VALUES (NULL, '$opcion1', '$opcion2', '$opcion3', '$id_tema')";
                $objConexion->ejecutar($sqlopcion_encuesta);
    
            }
    
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

        }

    }

}

?> 