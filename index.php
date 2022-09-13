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
               
            </div>
        </div>
<?php include "view/footer.php"?>