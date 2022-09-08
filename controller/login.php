<?php

// cuando se realice un envio de información
if ($_POST) {

    // se comprueba si el botón 'enviar' existe
    if (isset($_POST['enviar'])) {

        $btn = $_POST['enviar'];        // guardamos el value
        $objConexion = new Conexion;    // creamos una nueva conexion

        // nos conectamos al botón
        switch ($btn) {

            // para registrarse
            case 'registrarse':
                // guardamos los names de los inputs del formulario de registro
                $dni = $_POST['dni'];
                $p_nombre = $_POST['p_nombre'];
                $s_nombre = $_POST['s_nombre'];
                $apellido_m = $_POST['apellido_m'];
                $apellido_p = $_POST['apellido_p'];
                $nacimiento = $_POST['nacimiento'];
                $telefono = $_POST['telefono'];
                $correo = $_POST['correo'];
                $contrasenia = $_POST['contrasenia'];
                $confirmContrasenia = $_POST['confirmContrasenia'];
                $direccion = $_POST['direccion'];
                $internet = $_POST['internet'];
                $acceso_dispositivo = $_POST['acceso_dispositivo'];
                $dispositivo = $_POST['dispositivo'];
                $discapacidad = $_POST['discapacidad'];
                $estrato = $_POST['estrato'];
                $regimen = $_POST['regimen'];
                $fktipo_doc = $_POST['fktipo_doc'];
                $fketnia = $_POST['fketnia'];
                $fksexo = $_POST['fksexo'];
                $fknvledu = $_POST['fknvledu'];
                $fkbarrio = $_POST['fkbarrio'];
                $fkmunicipio = $_POST['fkmunicipio'];

                // confirmamos contraseña
                if ($contrasenia == $confirmContrasenia) {

                    // hacemos la insercción en la tabla
                    $sql = "INSERT INTO `usuario` (`dni`, `p_nombre`, `s_nombre`, `apellido_m`, `apellido_p`, `nacimiento`, `telefono`, `correo`, `contrasenia`, `direccion`, `internet`, `acceso_dispositivo`, `dispositivo`, `fkdiscapacidad`, `estrato`, `regimen`,`fktipo_doc`, `fktipo_usu`, `fketnia`, `fksexo`, `fknvledu`, `fkbarrio`, `fkmunicipio`) VALUES ('$dni', '$p_nombre ', '$s_nombre', '$apellido_m', '$apellido_p', '$nacimiento', '$telefono', '$correo', '$contrasenia', '$direccion', '$internet ', '$acceso_dispositivo', '$dispositivo', '$discapacidad', '$estrato', '$regimen', '$fktipo_doc', '1', '$fketnia', '$fksexo', '$fknvledu', '$fkbarrio', '$fkmunicipio')";
                    // llamamos al método ejecutar de conexion
                    $objConexion->ejecutar($sql);

                }
                break;
            
            // si es el botón para loguearte
            case 'ingresar':
                
                // almacenamos los valores de los inputs
                $fktipo_doc = $_POST['fktipo_doc'];
                $dni = $_POST['dni'];
                $contrasenia = $_POST['contrasenia'];

                // consultamos en la tabla según el dni
                $sql = "SELECT * FROM `usuario` WHERE `usuario`.`dni` = $dni";
                $resultado = $objConexion->consultar($sql);

                // si la contraseña y tipo de documento SÍ pertenecen al usuario consultado
                if (($contrasenia == $resultado[0]['contrasenia']) && ($fktipo_doc == $resultado[0]['fktipo_doc'])) {

                    // iniciamos el session
                    session_start();

                    // almacenamos los datos del usuario en la variable
                    $_SESSION = array("nombre"=>$resultado[0]['p_nombre']. " ". $resultado[0]['s_nombre']. " ". $resultado[0]['apellido_p'] . " ". $resultado[0]['apellido_m'], "correo"=>$resultado[0]['correo'], "tipo_usu"=>$resultado[0]['fktipo_usu']);

                    ?>
                    <script>

                        alert('Logueado con éxito!');

                        setTimeout(function(){
                            location.href="../index.php"
                        } , 1000);  

                    </script>
                    <?php
                } else {

                    echo "<script>alert('Error... Las contraseñas no coinciden')</script>";

                }
            
        }

    }

}

?>