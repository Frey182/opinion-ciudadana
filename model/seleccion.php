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

$temas = "SELECT * FROM tema INNER JOIN usuario ON tema.fkusuario = usuario.dni ORDER BY id DESC;";
$temas = $objConexion->consultar($temas);

$comentarios = "SELECT * FROM comentario;";
$comentarios = $objConexion->consultar($comentarios);

?>

<?php

if ($_POST){

if (isset($_POST['Para'])){
$publico=$_POST['publico'];
$edad=$_POST['edad'];
$municipio=$_POST['municipio'];
$barrio=$_POST['barrio'];
$etnia=$_POST['etnia'];
$discapacidad=$_POST['discapacidad'];
$estrato=$_POST['estrato'];
$nvledu=$_POST['nvledu'];
$regimen=$_POST['regimen'];
}
}
?>