<?php

$objConexion = new conexion;

$etnias = "SELECT * FROM `etnia`";
$etnias = $objConexion->consultar($etnias);

$municipios = "SELECT * FROM `municipio`";
$municipios = $objConexion->consultar($municipios);

$barrios = "SELECT * FROM `barrio`";
$barrios = $objConexion->consultar($barrios);

$sexos = "SELECT * FROM `sexo`";
$sexos = $objConexion->consultar($sexos);

$tipo_docs = "SELECT * FROM `tipo_doc`";
$tipo_docs = $objConexion->consultar($tipo_docs);

$discapacidades = "SELECT * FROM `discapacidad`";
$discapacidades = $objConexion->consultar($discapacidades);

$niveles_educativos = "SELECT * FROM `nivel_educativo`";
$niveles_educativos = $objConexion->consultar($niveles_educativos);

?>