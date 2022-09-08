<?php 
session_start();
print_r($_SESSION); 
?>
<?php include "model/conexion.php"; ?>
<?php include "model/seleccion.php"; ?>
<?php include "controller/publicar.php"; ?>
<?php include "view/header.php"; ?>
        <div class="contepublicacion">
            <div class="container h-100">
            <div class="card mb-3">
                    <div class="card-header d-flex border p-3 rounded shadow-sm bg-warning">
                        <div class="conteimguser">
                            <img src="view/img/logogobierno.png" alt="John Doe" class="mr-3 mt-1 rounded-circle" style="width:60px;">
                        </div>
                        <div class="contenameusu">
                        <form action="index.php" method="post">
                            <div class="form-group w-100">
                                <input type="text" class="form-control" placeholder="Título" id="text" name="nombre">
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-3 bg-white">
                        <div class="media-body text-align-center">
                                <div class="form-group">
                                    <textarea name="descripcion" class="form-control" placeholder="Escribe tu contenido" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <button name="enviar" value="publicartema" type="submit" class="btn btn-success">Publicar</button>
                                    <button class="btn btn-primary rounded-circle" style="height: 50px; width: 50px;"></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <?php foreach ($temas as $tema) { ?>
                    <div class="card mb-3">
                    <div class="card-header d-flex border p-3 rounded shadow-sm bg-warning">
                        <div class="conteimguser">
                            <img src="view/img/logogobierno.png" alt="John Doe" class="mr-3 mt-1 rounded-circle" style="width:60px;">
                        </div>
                        <div class="contenameusu">
                            <h4><?php echo $tema['nombre']; ?> <small><i>Publicado <?php echo $tema['fecha']; ?></i></small></h4>
                            <p><?php echo $tema['correo']; ?></p>
                        </div>
                    </div>
                    <div class="card-body p-3 bg-white">
                        
                        <div class="media-body text-align-center">
                            <p><?php echo $tema['descripcion']; ?></p>
                            <img src="" alt="" class="" style="">
                        </div>
                    </div>
                    <?php foreach ($comentarios as $comentario) { ?>
                        <div class="card-footer text-muted">
                            <div class="media border p-3">
                                <img src="view/img/logogobierno.png" alt="John Doe" class="mr-3 mt-1 rounded-circle" style="width:60px;">
                                <div class="media-body">
                                    <h4>John Doe <small><i>Posted on February 19, 2016</i></small></h4>
                                    <p>Lorem ipsum...</p>
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
                    <div class="media bg-warning p-2 rounded-bottom">
                        <form action="" class="w-100">
                            <div class="input-group mb-1 texto">
                                <textarea name="descripcion" class="form-control texto" row="1" col="50" aria-label="With textarea"></textarea>
                                    <div class="input-group-append">
                                    <button class="btn btn-outline-success font-weight-bold" type="button" id="button-addon2">Comentar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
<?php include "view/footer.php"?>