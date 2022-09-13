<?php session_start();?>
<?php include "view/header.php"?>
<?php include "model/seleccion.php"?>
<?php include "controller/publicar.php"?>
<?php include "controller/comentar.php"?>
        <div class="contepublicacion">
            <div class="container h-100">

                <?php if($_SESSION['tipo_usu']=="administrador"){ ?>
                    <div class="card mb-3 border-secondary">
                        <div class="card-body p-3 bg-white">
                            <div class="contenameusu">
                                <form action="index.php" method="post">
                                    <div class="form-group w-100 bg-light">
                                        <input type="text" class="form-control bg-light" placeholder="Título" id="text" name="nombre">
                                    </div>
                            </div>
                            <div class="media-body text-align-center">
                                    <div class="form-group">
                                        <textarea name="descripcion" class="form-control bg-light" placeholder="Escribe tu contenido" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                    <div class="d-flex float-right">
                                            <div class="form-group mr-2 my-2 my-lg-2">
                                                <select class="form-control" id="exampleFormControlSelect1" name="tipo_publi">
                                                <option disable>Tipo de publicacion</option>
                                                <option value="encuesta">Encuesta</option>
                                                <option>Votacion</option>
                                                <option>Opinion</option>
                                                <option value="publicacion">Publicacion</option>
                                                </select>
                                            </div>
                                            <div class="form-group mr-2 my-2 my-lg-2">
                                                <select class="form-control" id="exampleFormControlSelect2">
                                                <!-- <i class="fa-solid fa-users"> Publico</i> -->
                                                <option>Publico</option>
                                                <option>Hombres</option>
                                                <option>Mujeres</option>
                                                <option>14 - 19 años</option>
                                                <option>5</option>
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
                    <div class="card mb-3">
                        <div class="publicacion" id="<?php echo $tema['id']; ?>">
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
                                    <div class="media border p-3 bg-light comentario" id="<?php echo $comentario['id'] ?>">
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
            </div>
        </div>
<?php include "view/footer.php"?>
<script src="view/js/comentarios.js"></script>