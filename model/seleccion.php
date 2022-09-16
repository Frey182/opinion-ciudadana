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

$comentarios = "SELECT * FROM comentario INNER JOIN usuario ON usuario.dni = comentario.id_usu;";
$comentarios = $objConexion->consultar($comentarios);

$opcion_encuestas = "SELECT * FROM opcion_encuesta;";
$opcion_encuestas = $objConexion->consultar($opcion_encuestas);

$condiciones = "SELECT * FROM condicion;";
$condiciones = $objConexion->consultar($condiciones);

if (isset($_SESSION['edad'])) {
<<<<<<< HEAD

    // seleccionamos los temas y estos solo aparecen si el usuario cumple con las condiciones
    $temas = "SELECT * FROM tema INNER JOIN usuario ON tema.fkusuario = usuario.dni INNER JOIN condicion ON tema.id = condicion.id_tema WHERE condicion.edad =".$_SESSION['edad'];
    $temas = $objConexion->consultar($temas);

=======
    $temas = "SELECT * FROM tema 
    INNER JOIN usuario ON tema.fkusuario = usuario.dni 
    INNER JOIN condicion ON tema.id = condicion.id_tema
    WHERE condicion.edad =".$_SESSION['edad'];
    $temas = $objConexion->consultar($temas);
>>>>>>> 3d2a2526c9b962734e9a79f6d0df1b8339081649
}

/* 
SELECT 
tema.id AS tema_id, 
tema.nombre AS tema_nombre, 
tema.descripcion AS tema_descripcion, 
tema.imagen AS tema_imagen,
tema.fecha AS tema_fecha,
tema.fkusuario AS tema_fkusuario, 
usuario.dni AS usuario_dni, 
usuario.correo AS usuario_correo, 
comentario.id AS comentario_id, 
comentario.descripcion AS comentario_descripcion, 
comentario.id_usu AS comentario_idtema, 
comentario.id_usu AS comentario_idusu 
FROM tema INNER JOIN usuario ON tema.fkusuario = usuario.dni INNER JOIN comentario ON comentario.id_usu = usuario.dni ORDER BY tema.id DESC;
*/

?>