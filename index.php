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
                                                                            <option value="<?php echo $sexo['id'] ?>"><?php echo $sexo['nombre'] ?></option>
                                                                            <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group mr-2 my-2 my-lg-2">
                                                                            <select class="form-control" id="exampleFormControlSelect2" name="edad">
                                                                            <!-- <i class="fa-solid fa-users"> Publico</i> -->
                                                                            <option >Edad</option>
                                                                            <option>Todas</option>
                                                                            <option>...</option>
                                                                            <option>...</option>
                                                                            <option>...</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group mr-2 my-2 my-lg-2">
                                                                            <select class="form-control" id="exampleFormControlSelect2" name="municipio">
                                                                            <!-- <i class="fa-solid fa-users"> Publico</i> -->
                                                                            <option >Municipio</option>
                                                                            <option>Todos</option>
                                                                            <?php foreach ($municipios as $municipio) { ?>
                                                                            <option value="<?php echo $municipio['id'] ?>"><?php echo $municipio['nombre'] ?></option>
                                                                            <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group mr-2 my-2 my-lg-2">
                                                                            <select class="form-control" id="exampleFormControlSelect2" name="barrio">
                                                                            <!-- <i class="fa-solid fa-users"> Publico</i> -->
                                                                            <option >Barrio/Vereda</option>
                                                                            <option>Todos</option>
                                                                            <?php foreach ($barrios as $barrio) { ?>
                                                                            <option value="<?php echo $barrio['id'] ?>"><?php echo $barrio['nombre'] ?></option>
                                                                            <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                    <div class="form-group mr-2 my-2 my-lg-2">
                                                                            <select class="form-control" id="exampleFormControlSelect2" name="etnia">
                                                                            <!-- <i class="fa-solid fa-users"> Publico</i> -->
                                                                            <option >Etnia</option>
                                                                            <option>Todas</option>
                                                                            <?php foreach ($etnias as $etnia) { ?>
                                                                            <option value="<?php echo $etnia['id'] ?>"><?php echo $etnia['nombre'] ?></option>
                                                                            <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group mr-2 my-2 my-lg-2">
                                                                            <select class="form-control" id="exampleFormControlSelect2" name="discapacidad">
                                                                            <!-- <i class="fa-solid fa-users"> Publico</i> -->
                                                                            <option >Discapacidad</option>
                                                                            <option>Todas</option>
                                                                            <?php foreach ($discapacidades as $discapacidad) { ?>
                                                                            <option value="<?php echo $discapacidad['id'] ?>"><?php echo $discapacidad['nombre'] ?></option>
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
                                                                            <option value="<?php echo $nivel_educativo['id'] ?>"><?php echo $nivel_educativo['nombre'] ?></option>
                                                                            <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group mr-2 my-2 my-lg-2">
                                                                            <select class="form-control" id="exampleFormControlSelect2" name="regimen">
                                                                            <!-- <i class="fa-solid fa-users"> Publico</i> -->
                                                                            <option >Regimen</option>
                                                                            <option>Todas</option>
                                                                            <option value="1">Contributivo</option>
                                                                            <option value="1">Subcidiado</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                                <button type="submit" class="btn btn-warning" name="Para">Aceptar</button>
                                                            </div>
                                                        </div>
                                                  <!--  </form> -->
                                                </div>
                                            </div>
                                            <div class="form-group mr-2 my-2 my-lg-2">
                                                <select class="form-control" id="exampleFormControlSelect1" name="tipo_publi">
                                                <option disable>Tipo de publicacion</option>
                                                <option value="encuesta">Encuesta</option>
                                                <option>Votacion</option>
                                                <option>Opinion</option>
                                                <option value="publicacion">Publicacion</option>
                                                </select>
                                            </div>
                                        <button class="btn btn-light border-secondary rounded-circle mr-2" style="height: 50px; width: 50px;"><i class="fa-regular fa-image"></i></button>
                                        <button name="enviar" type="submit" class="btn btn-success rounded-circle" style="height: 50px; width: 50px;"><i class="fa-solid fa-arrow-up-from-bracket" ></i></button>
                                       
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php } ?>
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
                            <div class="card-footer text-muted">
                                
                                <?php foreach ($comentarios as $comentario) { ?>
                                    <?php if ($comentario['id_tema'] == $tema['id']) { ?>

                                        <div class="media border p-3 bg-light comentario" id="<?php echo $comentario['id_tema']; ?>">
                                            <img src="view/img/logogobierno.png" alt="John Doe" class="mr-3 mt-1 rounded-circle" style="width:60px;">
                                            <div class="media-body">
                                                <h4>John Doe <small><i>Posted on February 19, 2016</i></small></h4>
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
                                    <?php } ?>
                                <?php } ?>

                            </div>
                            <div class="media bg-white p-2 rounded-bottom">
                                <form action="index.php" method="post" class="w-100">
                                    <div class="input-group mb-1 texto">
                                        <input type="hidden" name="tema" value="<?php echo $tema['id']; ?>">
                                        <textarea name="descripcion" class="form-control texto bg-light" row="1" col="50" aria-label="With textarea"></textarea>
                                        <div class="input-group-append">
                                            <button name="comentar" value="comentar" class="btn btn-outline-warning font-weight-bold" type="submit" id="button-addon2">Comentar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> 
                <?php } ?>
                <!-- PARA ENCUESTAS -->
            <?php foreach ($encuestas as $encuesta) { ?>
                <div class="card mb-3">
                    <div class="card-header d-flex border p-3 rounded shadow-sm bg-warning">
                        <div class="conteimguser">
                            <img src="view/img/logogobierno.png" alt="John Doe" class="mr-3 mt-1 rounded-circle" style="width:60px;">
                        </div>
                        <div class="contenameusu">
                            <h4><?php echo $encuesta['nombre']; ?> <small><i>Publicado <?php echo $encuesta['fecha']; ?></i></small></h4>
                            <p>por "<?php echo $encuesta['correo']; ?>"</p>
                        </div>
                    </div>
                    <div class="card-body p-3 bg-white">
                        
                        <div class="media-body text-align-center">
                            <p><?php echo $encuesta['descripcion']; ?></p>
                            <img src="" alt="" class="" style="">
                        </div>
                    </div>
                
                    <div class="card-footer text-muted">
                        <div class="media border p-3 bg-light">
                                <form action="">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            SI
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">
                                            NO
                                        </label>
                                        </div>
                                        <div class="form-check ">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                        <label class="form-check-label" for="exampleRadios3">
                                            Tal ves
                                        </label>
                                    </div>
                        </div>
                                    <div class="conteboton d-flex justify-content-center mt-3">
                                        <button type="submit" class="btn btn-warning">Responder</button>
                                    </div>
                                </form>
                            
                    </div>
                </div> 
            <?php } ?>
            </div>
        </div>
<?php include "view/footer.php"?>
<script src="view/js/comentarios.js"></script>