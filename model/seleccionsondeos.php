<?php

if ($_POST) {

    if (isset($_POST['seleccionar'])) {

        $sexoSelect = $_POST['sexo'];
        $idencuesta = $_POST['idencuesta'];
        $etniaSelect = $_POST['etnia'];
        $municipioSelect = $_POST['municipio'];
        $discapacidadSelect = $_POST['discapacidad'];

        if ($sexoSelect == 'Hombre') {
            
            $votosHombre = "SELECT count(condicion.sexo) FROM encuesta_usuario 
            INNER JOIN tema ON tema.id = encuesta_usuario.id_encuesta 
            INNER JOIN condicion ON tema.id = condicion.id_tema 
            WHERE condicion.sexo = 'hombre' 
            AND tema.id = ".$encuesta['id'];
            $votosHombre = $objConexion->consultar($votosHombre);

        } else {

            $votosMujer = "SELECT count(condicion.sexo) FROM encuesta_usuario 
            INNER JOIN tema ON tema.id = encuesta_usuario.id_encuesta 
            INNER JOIN condicion ON tema.id = condicion.id_tema 
            WHERE condicion.sexo = 'mujer' AND tema.id = ".$encuesta['id'];
            $votosMujer = $objConexion->consultar($votosMujer);

        }

        if (isset($etniaSelect)) {

            $votoEtnia = "SELECT count(condicion.etnia) FROM encuesta_usuario 
            INNER JOIN tema ON tema.id = encuesta_usuario.id_encuesta 
            INNER JOIN condicion ON tema.id = condicion.id_tema 
            WHERE condicion.etnia = '$etniaSelect' AND tema.id = ".$encuesta['id'];
            $votoEtnia = $objConexion->consultar($votoEtnia);

        }

        if (isset($municipioSelect)) {

            $votoMunicipio = "SELECT count(condicion.municipio) FROM encuesta_usuario 
            INNER JOIN tema ON tema.id = encuesta_usuario.id_encuesta 
            INNER JOIN condicion ON tema.id = condicion.id_tema 
            WHERE condicion.municipio = '$municipioSelect' AND tema.id = ".$encuesta['id'];
            $votoMunicipio = $objConexion->consultar($votoMunicipio);

        }

        if (isset($discapacidadSelect)) {

            $votoDiscapacidad = "SELECT count(condicion.discapacidad) FROM encuesta_usuario 
            INNER JOIN tema ON tema.id = encuesta_usuario.id_encuesta 
            INNER JOIN condicion ON tema.id = condicion.id_tema 
            WHERE condicion.discapacidad = '$discapacidadSelect' AND tema.id = ".$encuesta['id'];
            $votoDiscapacidad = $objConexion->consultar($votoDiscapacidad);

        }

    }

}

?>