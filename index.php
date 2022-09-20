<?php 

session_start();

if (empty($_SESSION)) {

    header('location: view/login.php');

}

?>
<?php include "view/header.php"?>
<?php include "model/seleccion.php"?>
<?php include "controller/publicar.php"?>
<?php include "controller/comentar.php"?>
        <div class="contepublicacion">
            <div class="container h-100">

                <?php if($_SESSION['tipo_usu']=="administrador"){ ?>
                    <div class="card mb-3 border-secondary">
                        <div class="card-body p-3 bg-white">
                        <form action="index.php" method="post">    
                            <div class="contenameusu">
                               
                                    <div class="form-group w-100 bg-light">
                                        <input type="text" class="form-control bg-light" placeholder="Título" id="text" name="nombre">
                                    </div>
                            </div>
                            <div class="media-body text-align-center">
                                    <div class="form-group">
                                        <textarea name="descripcion" class="form-control bg-light" placeholder="Escribe tu contenido" id="exampleFormControlTextarea1" rows="3"></textarea>

                                    <div class="mt-3 border bg-light p-3 rounded d-none" id="radios">
                                        <p>Escriba las respuestas</p>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                <input type="radio" aria-label="Radio button for following text input">
                                                </div>
                                            </div>
                                            <input type="text" class="form-control" aria-label="Text input with radio button" name="opcion1">
                                        </div>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                <input type="radio" aria-label="Radio button for following text input">
                                                </div>
                                            </div>
                                            <input type="text" class="form-control" aria-label="Text input with radio button" name="opcion2">
                                        </div>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                <input type="radio" aria-label="Radio button for following text input">
                                                </div>
                                            </div>
                                            <input type="text" class="form-control" aria-label="Text input with radio button" name="opcion3">
                                        </div>
                                    </div>

                                    </div>
                                    <div class="d-flex float-right">
                                        <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModalCenter">
                                           ¿Para quien?
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                  <!--  <form action=""> -->
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLongTitle">Elige para que publico sera tu publicacion</h5>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="conte">
                                                                    <div class="form-group mr-2 my-2 my-lg-2">
                                                                            <select class="form-control" id="exampleFormControlSelect2" name="publico">
                                                                            <option>Publico</option>
                                                                            <option>Todos</option>
                                                                            <?php foreach ($sexos as $sexo) { ?>
                                                                            <option value="<?php echo $sexo['nombre'] ?>"><?php echo $sexo['nombre'] ?></option>
                                                                            <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group mr-2 my-2 my-lg-2">
                                                                            <select class="form-control" id="exampleFormControlSelect2" name="edad">
                                                                            <!-- <i class="fa-solid fa-users"> Publico</i> -->
                                                                            <option>Edad</option>
                                                                            <option value="1000">Todas</option>
                                                                            <?php 

                                                                            $edades = 1;
                                                                            $maxEdad = 100;

                                                                            while ($edades <= $maxEdad) {
                                                                            ?>
                                                                                <option><?php echo $edades++ ?></option>
                                                                            <?php } ?>
                                                                            </select>

                                                                        </div>
                                                                        <div class="form-group mr-2 my-2 my-lg-2">
                                                                            <select class="form-control" id="exampleFormControlSelect2" name="municipio">
                                                                            <!-- <i class="fa-solid fa-users"> Publico</i> -->
                                                                            <option >Municipio</option>
                                                                            <option>Todos</option>
                                                                            <?php foreach ($municipios as $municipio) { ?>
                                                                            <option value="<?php echo $municipio['nombre'] ?>"><?php echo $municipio['nombre'] ?></option>
                                                                            <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group mr-2 my-2 my-lg-2">
                                                                            <select class="form-control" id="exampleFormControlSelect2" name="barrio">
                                                                            <!-- <i class="fa-solid fa-users"> Publico</i> -->
                                                                            <option >Barrio/Vereda</option>
                                                                            <option>Todos</option>
                                                                            <?php foreach ($barrios as $barrio) { ?>
                                                                            <option value="<?php echo $barrio['nombre'] ?>"><?php echo $barrio['nombre'] ?></option>
                                                                            <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                    <div class="form-group mr-2 my-2 my-lg-2">
                                                                            <select class="form-control" id="exampleFormControlSelect2" name="etnia">
                                                                            <!-- <i class="fa-solid fa-users"> Publico</i> -->
                                                                            <option >Etnia</option>
                                                                            <option>Todas</option>
                                                                            <?php foreach ($etnias as $etnia) { ?>
                                                                            <option value="<?php echo $etnia['nombre'] ?>"><?php echo $etnia['nombre'] ?></option>
                                                                            <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group mr-2 my-2 my-lg-2">
                                                                            <select class="form-control" id="exampleFormControlSelect2" name="discapacidad">
                                                                            <!-- <i class="fa-solid fa-users"> Publico</i> -->
                                                                            <option >Discapacidad</option>
                                                                            <option>Todas</option>
                                                                            <?php foreach ($discapacidades as $discapacidad) { ?>
                                                                            <option value="<?php echo $discapacidad['nombre'] ?>"><?php echo $discapacidad['nombre'] ?></option>
                                                                            <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group mr-2 my-2 my-lg-2">
                                                                            <select class="form-control" id="exampleFormControlSelect2" name="estrato">
                                                                            <!-- <i class="fa-solid fa-users"> Publico</i> -->
                                                                            <option >Estrato</option>
                                                                            <option>Todas</option>
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option> 
                                                                            <option value="5">5</option>
                                                                            <option value="6">6</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group mr-2 my-2 my-lg-2">
                                                                            <select class="form-control" id="exampleFormControlSelect2" name="nvledu">
                                                                            <!-- <i class="fa-solid fa-users"> Publico</i> -->
                                                                            <option >Nivel educativo</option>
                                                                            <option>Todas</option>
                                                                            <?php foreach ($niveles_educativos as $nivel_educativo) { ?>
                                                                            <option value="<?php echo $nivel_educativo['nombre'] ?>"><?php echo $nivel_educativo['nombre'] ?></option>
                                                                            <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group mr-2 my-2 my-lg-2">
                                                                            <select class="form-control" id="exampleFormControlSelect2" name="regimen">
                                                                            <!-- <i class="fa-solid fa-users"> Publico</i> -->
                                                                            <option >Regimen</option>
                                                                            <option>Todas</option>
                                                                            <option value="Contributivo">Contributivo</option>
                                                                            <option value="Subcidiado">Subcidiado</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                                <button type="button" class="btn btn-warning" data-dismiss="modal">Aceptar</button>
                                                            </div>
                                                        </div>
                                                  <!--  </form> -->
                                                </div>
                                            </div>
                                            <div class="form-group mr-2 my-2 my-lg-2">
                                                <select class="form-control" id="tipo_publi" onchange="cambiarTipoPubli()" name="tipo_publi">
                                                    <option disable>Tipo de publicacion</option>
                                                    <option value="encuesta">Encuesta</option>
                                                    <option value="publicacion">Publicacion</option>
                                                </select>
                                            </div>
                                        <button class="btn btn-light border-secondary rounded-circle mr-2" style="height: 50px; width: 50px;"><i class="fa-regular fa-image"></i></button>
                                        <button name="enviar" value="publicar" type="submit" class="btn btn-success rounded-circle" style="height: 50px; width: 50px;"><i class="fa-solid fa-arrow-up-from-bracket" ></i></button>
                                       
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php } ?>

                <!--  -->                                                                  

                <!-- PARA PUBLICACIONES -->
                <?php foreach ($temas as $tema) { ?>
                    <div class="card mb-3 publicacion" id="<?php echo $tema['id']; ?>">
                        <div>
                            <div class="card-header d-flex border p-3 rounded shadow-sm bg-warning">
                                <div class="conteimguser">
                                    <img src="view/img/logogobierno.png" alt="John Doe" class="mr-3 mt-1 rounded-circle" style="width:60px;">
                                </div>
                                <div class="contenameusu">
                                    <h4><?php echo $tema['nombre']; ?> <small><i>Publicado <?php echo $tema['fecha']; ?></i></small></h4>
                                    <p>por "<?php echo $tema['correo']; ?>"</p>
                                </div>
                            </div>
                            <div class="card-body p-3 bg-white">
                                
                                <div class="media-body text-align-center">
                                    <p><?php echo $tema['descripcion']; ?></p>
                                    <img src="" alt="" class="" style="">
                                </div>
                            </div>
                            <?php if ($tema['tipo_tema'] == "publicacion") {?>
                                <?php foreach ($comentarios as $comentario) { ?>
                                    <?php if ($comentario['id_tema'] == $tema['id_tema']) { ?>
                                        <div class="card-footer text-muted">
                                            <div class="media border p-3 bg-light comentario" id="<?php echo $comentario['id_tema']; ?>">
                                                <img src="view/img/logogobierno.png" alt="John Doe" class="mr-3 mt-1 rounded-circle" style="width:60px;">
                                                <div class="media-body">
                                                    <h4><?php echo $comentario['p_nombre']." ".$comentario['apellido_p']?><small><i> Publicado el <?php echo $tema['fecha'] ?></i></small></h4>
                                                    <p><?php echo $comentario['descripcion']; ?></p>
                                                    <div class="media p-3">
                                                    <img src="view/img/logogobierno.png" alt="Jane Doe" class="mr-3 mt-1 rounded-circle" style="width:45px;">
                                                    <div class="media-body">
                                                        <h4>Jane Doe <small><i>Posted on February 20 2016</i></small></h4>
                                                        <p>Lorem ipsum...</p>
                                                    </div>
                                                    </div> 
                                                </div>
                                            </div>   
                                        </div>
                                    <?php } ?>  
                                <?php } ?>

                                <div class="media bg-white p-2 rounded-bottom">
                                    <form action="index.php" method="post" class="w-100">
                                        <div class="input-group mb-1 texto">
                                            <input type="hidden" name="tema" value="<?php echo $tema['id_tema']; ?>">
                                            <textarea name="descripcion" class="form-control texto bg-light" row="1" col="50" aria-label="With textarea"></textarea>
                                            <div class="input-group-append">
                                                <button name="comentar" value="comentar" class="btn btn-outline-warning font-weight-bold" type="submit" id="button-addon2">Comentar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            <?php } else if ($tema['tipo_tema'] == "encuesta") {?>
                                <?php foreach ($opcion_encuestas as $opcion_encuesta) { ?>
                                    <?php if ($opcion_encuesta['tema_id'] == $tema['id_tema']) { ?>
                                        <div class="card-footer text-muted">
                                            <div class="media border p-3 bg-light">
                                                <form action="">
                                                    <input type="hidden" name="idtema" value="<?php echo $tema['id'] ?>">
                                                    <input type="hidden" name="usuario" value="<?php echo $tema['fkusuario'] ?>">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" name="opcion" value="<?php echo $encuesta['opcion1'] ?>" checked>
                                                        <label class="form-check-label" for="exampleRadios1">
                                                            <?php echo $opcion_encuesta['opcion1'];?>
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" name="opcion" value="<?php echo $encuesta['opcion2'] ?>">
                                                        <label class="form-check-label" for="exampleRadios2">
                                                            <?php echo $opcion_encuesta['opcion2'];?>
                                                        </label>
                                                    </div>
                                                    <div class="form-check ">
                                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" name="opcion" value="<?php echo $encuesta['opcion3'] ?>">
                                                        <label class="form-check-label" for="exampleRadios3">
                                                            <?php echo $opcion_encuesta['opcion3'];?>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="conteboton d-flex justify-content-center mt-3">
                                                    <button type="submit" name="enviar" value="resencuesta" class="btn btn-warning">Responder</button>
                                                </div>
                                            </form>
                                        </div>
                                    <?php } ?>    
                                <?php } ?>
                            <?php } ?>
                        </div>
                    </div>                       
                <?php } ?>

                <!--  -->

            </div>
        </div>
<?php include "view/footer.php"?>
<script src="view/js/encuesta.js"></script>