<?php 
session_start();
print_r($_SESSION); 
?>
<?php include "view/header.php"?>
        <div class="contepublicacion">
            <div class="container h-100">
                <div class="card">
                    <div class="card-header d-flex border p-3 rounded shadow-sm bg-warning">
                        <div class="conteimguser">
                            <img src="view/img/logogobierno.png" alt="John Doe" class="mr-3 mt-1 rounded-circle" style="width:60px;">
                        </div>
                        <div class="contenameusu">
                            <h4>Duvan Bolaño <small><i>Posted on February 19, 2016</i></small></h4>
                            <p>Duvan@gmail.com</p>
                        </div>
                    </div>
                    <div class="card-body p-3 bg-white">
                        
                        <div class="media-body text-align-center">
                            <h4 class="test">Nueva publicacion........</h4>
                            <p>Lorem ipsum...</p>
                            <img src="" alt="" class="" style="">
                        </div>
                    </div>
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
                </div>
                <div class="media bg-white p-2 rounded-bottom">
                    <div class="input-group mb-1 texto">
                    <textarea class="form-control texto bg-light" row="1" col="50" aria-label="With textarea"></textarea>
                    <div class="input-group-append">
                        <button class="btn btn-outline-warning font-weight-bold" type="button" id="button-addon2">Comentar</button>
                    </div>
                    </div>
                </div>
            </div>
        </div>
<?php include "view/footer.php"?>