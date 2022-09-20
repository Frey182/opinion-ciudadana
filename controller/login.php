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

                // calculamos la edad con la fecha ingresada y la fecha actual
                $cumpleanos = new DateTime("$nacimiento");
                $hoy = new DateTime();
                $annos = $hoy->diff($cumpleanos);

                // confirmamos contraseña
                if ($contrasenia == $confirmContrasenia) {

                    // hacemos la insercción en la tabla
                    $sql = "INSERT INTO `usuario` (`dni`, `p_nombre`, `s_nombre`, `apellido_m`, `apellido_p`, `nacimiento`, `edad`, `telefono`, `correo`, `contrasenia`, `direccion`, `internet`, `acceso_dispositivo`, `dispositivo`, `estrato`, `regimen`,`fktipo_doc`, `fktipo_usu`, `fketnia`, `fksexo`, `fknvledu`, `fkbarrio`, `fkmunicipio`) VALUES ('$dni', '$p_nombre ', '$s_nombre', '$apellido_m', '$apellido_p', '$nacimiento', '$annos->y', '$telefono', '$correo', '$contrasenia', '$direccion', '$internet ', '$acceso_dispositivo', '$dispositivo', '$estrato', '$regimen', '$fktipo_doc', '1', '$fketnia', '$fksexo', '$fknvledu', '$fkbarrio', '$fkmunicipio')";
                    $sql2 = "INSERT INTO `usuario_discapacidad` (`id`, `id_discapacidad`, `id_usuario`) VALUES (NULL, '$discapacidad', '$dni')";
                    // llamamos al método ejecutar de conexion
                    $objConexion->ejecutar($sql);
                    $objConexion->ejecutar($sql2);


                    // iniciamos el session
                    session_start();

                    // almacenamos los datos del usuario en la variable
                    $_SESSION = array(
                        "nombre"=>$p_nombre. " ".  $s_nombre. " ". $apellido_p . " ". $apellido_m,  
                        "correo"=>$correo, 
                        "tipo_doc"=>$fktipo_doc,
                        "tipo_usu"=>"usuario",
                        "fketnia"=>$fketnia,
                        "fksexo"=>$fksexo,
                        "fknvledu"=>$fknvledu,
                        "fkbarrio"=>$fkbarrio,
                        "fkmunicipio"=>$fkmunicipio,
                        "edad"=>$annos->y,
                        "estrato"=>$estrato,
                        "regimen"=>$regimen,
                        "discapacidad"=>$discapacidad
                    );
                    
                    ?>
                    <script>

                        /* alert('Registrado con éxito!'); */
                        Swal.fire({
                            icon: 'success',
                            title: 'Realizado',
                            text: 'Se ha registrado con exito!',
                            })

                        setTimeout(function(){
                            location.href="../index.php"
                        } , 1000);  

                    </script>
                    <?php

                }
                break;

                case 'logout':
                    session_destroy();

                    ?>
                        <script>
                            location.href="view/login.php"  
                        </script>
                    <?php
                    break;
            
            // si es el botón para loguearte
            case 'ingresar':
                
                // almacenamos los valores de los inputs
                $fktipo_doc = $_POST['fktipo_doc'];
                $dni = $_POST['dni'];
                $contrasenia = $_POST['contrasenia'];

                // consultamos en la tabla según el dni
                $sql = "SELECT * FROM usuario u JOIN tipo_usu t ON u.fktipo_usu = t.id WHERE dni=$dni";
                $resultado = $objConexion->consultar($sql);

                $comparacion = "SELECT 
                usuario.regimen AS usario_regimen,
                usuario.edad  AS usuario_edad,
                usuario.estrato AS usuario_estrato,
                etnia.nombre AS etnia_nombre,
                municipio.nombre AS municipio_nombre,
                nivel_educativo.nombre AS nivel_educativo_nombre,
                sexo.nombre AS sexo_nombre,
                discapacidad.nombre AS discapacidad_nombre,
                barrio.nombre AS barrio_nombre
                FROM usuario, tipo_doc, etnia, municipio, nivel_educativo, sexo, discapacidad, barrio WHERE usuario.dni = $dni";

                $comparacion = $objConexion->consultar($comparacion);

                $temas = "SELECT * FROM tema INNER JOIN usuario ON tema.fkusuario = usuario.dni ORDER BY id DESC;";
                $temas = $objConexion->consultar($temas);

                // si la contraseña y tipo de documento SÍ pertenecen al usuario consultado
                if (($contrasenia == $resultado[0]['contrasenia']) && ($fktipo_doc == $resultado[0]['fktipo_doc'])) {

                    // iniciamos el session
                    session_start();

                    // almacenamos los datos del usuario en la variable
                    $_SESSION = array(
                        "dni"=>$resultado[0]['dni'], 
                        "nombre"=>$resultado[0]['p_nombre']. " ". $resultado[0]['s_nombre']. " ". $resultado[0]['apellido_p'] . " ". $resultado[0]['apellido_m'], 
                        "correo"=>$resultado[0]['correo'], 
                        "tipo_doc"=>$resultado[0]['fktipo_doc'],
                        "tipo_usu"=>$resultado[0]['nombre'],
                        "etnia"=>$comparacion[0]['etnia_nombre'],
                        "fksexo"=>$comparacion[0]['sexo_nombre'],
                        "nivel_edu"=>$comparacion[0]['nivel_educativo_nombre'],
                        "barrio"=>$comparacion[0]['barrio_nombre'],
                        "municipio"=>$comparacion[0]['municipio_nombre'],
                        "discapacidad"=>$comparacion[0]['discapacidad_nombre'],
                        "regimen"=>$comparacion[0]["usario_regimen"],
                        "estrato"=>$comparacion[0]["usuario_estrato"],
                        "edad"=>$comparacion[0]["usuario_edad"]
                    );

                    ?>
                    <script>

                        
                        Swal.fire({
                            icon: 'success',
                            title: 'Realizado',
                            text: 'Iniciando session...!',
                            })

                        setTimeout(function(){
                            location.href="../index.php"
                        } , 1000);  

                    </script>
                    <?php
                } else {

                     ?>
                    <script>

                        
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Las contraseñas no coinciden!',
                            })

                        setTimeout(function(){
                            location.href="login.php"
                        } , 1000);  

                    </script>
                    <?php

                }
            
        }

    }

}

?>