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
                $direccion = $_POST['direccion'];
                $internet = $_POST['internet'];
                $acesso_dispositivo = $_POST['acesso_dispositivo'];
                $dispositivo = $_POST['dispositivo'];
                $discapacidad = $_POST['discapacidad'];
                $estrato = $_POST['estrato'];
                $regimen = $_POST['regimen'];
                $fktipo_doc = $_POST['fktipo_doc'];
                $fktipo_usu = $_POST['fktipo_usu'];
                $fketnia = $_POST['fketnia'];
                $fksexo = $_POST['fksexo'];
                $fknvledu = $_POST['fknvledu'];
                $fkbarrio = $_POST['fkbarrio'];
                $fkmunicipio = $_POST['fkmunicipio'];

                // hacemos la insercción en la tabla
                $sql = "INSERT INTO `usuario` (`dni`, `p_nombre`, `s_nombre`, `apellido_m`, `apellido_p`, `nacimiento`, `telefono`, `correo`, `direccion`, `internet`, `acesso_dispositivo`, `dispositivo`, `fktipo_doc`, `fktipo_usu`, `fketnia`, `fksexo`, `fknvledu`, `fkbarrio`, `fkmunicipio`) VALUES ('$dni', '$p_nombre ', '$s_nombre', '$apellido_m', '$apellido_p', '$nacimiento', '$telefono', '$correo', '$direccion', '$internet ', '$acesso_dispositivo', '$dispositivo', '$discapacidad', '$estrato', '$regimen', '$fktipo_doc', 'usuario', '$fketnia', '$fksexo', '$fknvledu', '$fkbarrio', '$fkmunicipio')";
                // llamamos al método ejecutar de conexion
                $objConexion->ejecutar($sql);
                break;
            
        }

    }

}

?>