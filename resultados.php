<?php 
session_start();
include "view/header.php";
include "model/seleccion.php";
?>

<?php 
    foreach ($encuestas as $encuesta) {
        
    $respuesta = "SELECT count(respuestas) FROM encuesta_usuario WHERE id_encuesta = ".$encuesta['id'];
    $respuesta = $objConexion->consultar($respuesta);

    include "model/seleccionsondeos.php";

?>
    <div class="card mb-5 shadow">
        <div class="card-header d-flex align-items-center">
            <h2><?php echo $encuesta['nombre'] ?></h2>
            <form action="resultados.php" method="post" class="h-100 w-100 d-flex align-items-center justify-content-end">
                <div class="form-group mb-0 ml-4 d-flex align-items-center">
                    <input type="hidden" name="idencuesta" value="<?php echo $encuesta['id'] ?>">
                    <label class="mr-2" for="sexo">Sexo</label>
                    <select class="form-control" name="sexo">
                        <?php foreach ($sexos as $sexo) { ?>
                            <option id="sexo" value="<?php echo $sexo['nombre'] ?>"><?php echo $sexo['nombre'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                <div class="form-group mb-0 ml-4 d-flex align-items-center">
                    <label class="mr-2" for="sexo">Municipio</label>
                    <select class="form-control" name="municipio">
                        <?php foreach ($municipios as $municipio) { ?>
                            <option value="<?php echo $municipio['nombre'] ?>"><?php echo $municipio['nombre'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group mb-0 ml-4 d-flex align-items-center">
                    <label class="mr-2" for="sexo">Etnia</label>
                    <select class="form-control" name="etnia">
                        <?php foreach ($etnias as $etnia) { ?>
                            <option value="<?php echo $etnia['nombre'] ?>"><?php echo $etnia['nombre'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group mb-0 ml-4 d-flex align-items-center">
                    <label class="mr-2" for="sexo">Discapacidad</label>
                    <select class="form-control" name="discapacidad">
                        <?php foreach ($discapacidades as $discapacidad) { ?>
                            <option value="<?php echo $discapacidad['nombre'] ?>"><?php echo $discapacidad['nombre'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <button type="submit" name="seleccionar" class="btn btn-outline-success ml-4 font-weight-bold">Seleccionar</button>
            </form>
        </div>
        <div class="card-body">
            <h6>N??meros total de votos</h6>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: <?php echo $respuesta[0]['count(respuestas)']; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $respuesta[0]['count(respuestas)']; ?></div>
            </div>
        </div>
        <div class="card-footer bg-white">
            <?php if (isset($idencuesta)) { ?>
                <?php if ($idencuesta == $encuesta['id']) { ?>
                    <?php if (isset($sexoSelect)) { ?>
                        <?php if ($sexoSelect == 'Hombre') { ?>                    
                            <h6>N??meros total de votos por hombres</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar" role="progressbar" style="width: <?php echo $votosHombre[0]['count(condicion.sexo)']; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $votosHombre[0]['count(condicion.sexo)']; ?></div>
                            </div>
                        <?php } else { ?>
                            <h6>N??meros total de votos por mujeres</h6>
                            <div class="progress mb-3">
                                <div class="progress-bar" role="progressbar" style="width: <?php echo $votosMujer[0]['count(condicion.sexo)']; ?>']; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $votosMujer[0]['count(condicion.sexo)']; ?></div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                    <?php if (isset($etniaSelect)) { ?>        
                        <h6>N??meros total de votos por la etnia <?php echo $etniaSelect ?></h6>
                        <div class="progress mb-3">
                            <div class="progress-bar" role="progressbar" style="width: <?php echo $votoEtnia[0]['count(condicion.etnia)']; ?>']; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $votoEtnia[0]['count(condicion.etnia)']; ?></div>
                        </div>
                    <?php } ?>
                    <?php if (isset($municipioSelect)) { ?>        
                        <h6>N??meros total de votos por la etnia <?php echo $municipioSelect ?></h6>
                        <div class="progress mb-3">
                            <div class="progress-bar" role="progressbar" style="width: <?php echo $votoMunicipio[0]['count(condicion.municipio)']; ?>']; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $votoMunicipio[0]['count(condicion.municipio)']; ?></div>
                        </div>
                    <?php } ?>
                    <?php if (isset($discapacidadSelect)) { ?>        
                        <h6>N??meros total de votos por la etnia <?php echo $discapacidadSelect ?></h6>
                        <div class="progress mb-3">
                            <div class="progress-bar" role="progressbar" style="width: <?php echo $votoDiscapacidad[0]['count(condicion.discapacidad)']; ?>']; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $votoDiscapacidad[0]['count(condicion.discapacidad)']; ?></div>
                        </div>
                    <?php } ?>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
<?php } ?>

<?php include "view/footer.php"?>