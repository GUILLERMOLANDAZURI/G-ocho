<!DOCTYPE html>
<html>
<head>
    <?php require_once 'inc/css.php'; ?>
</head>
<body class="top-navigation">
    <div id="wrapper">
        <div id="page-wrapper" class="gray-bg">
            <?php require_once 'inc/nav.php'; ?>
            <div class="modal inmodal" id="myModal4" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content animated fadeIn">
                        <form class="m-t" role="form" action="" method="POST">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                <i class="fa fa-trash modal-icon"></i>
                                <h4 class="modal-title">Este proceso es irreversible.!</h4>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
                                <button type="submit" name="borrar" class="btn btn-danger">Borrar cuenta</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class=" wrapper-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                         <center>
                            <img width="40%" src="<?= base_url()?>PLANTILLA/imagenes/g-ocho.png">

                            <h2 class="font-bold">Actualizar datos</h2>
                        </center>
                    </div>
                    <div class="col-md-6">
                        <div class="ibox-content">
                            <form class="m-t" role="form" action="" method="POST">
                                <div class="form-group">
                                    <input disabled type="text" class="form-control" name="nombre" placeholder="Nombre de usuario" value="<?=$this->session->userdata('usuario')?>">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="contrasena" placeholder="Contraseña" required="">
                                </div>
                                <button type="submit" class="btn btn-primary block full-width m-b">Actualizar cuenta</button>
                                <p class="text-muted text-center">
                                    <small>Tener en cuenta que esta accion no se puede revertir </small>
                                </p>
                            </form>
                            <button type="button" class="btn btn-sm btn-danger btn-block" data-toggle="modal" data-target="#myModal4">Borrar cuenta</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div>
                <strong>Guillermo Landazuri Amaya</strong>
            </div>
        </div>
    </div>
</div>
<?php require_once 'inc/js.php'; ?>
<?php 
if (@$mensaje == 'success') {
    echo '
    <script>
        swal({
            title: "¡Buen trabajo!",
            text: "'.$texto.'",
            type: "success"
        });
    </script>';
}
if (@$mensaje == 'error') {
    echo '
    <script>
        swal({
            title: "¡ALGO PASO!",
            text: "'.$texto.'",
            type: "error"
        });
    </script>';
}
?>
</body>
</html>
