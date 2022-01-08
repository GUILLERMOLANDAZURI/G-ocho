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
                    <div class="modal-content animated bounceInRight">
                        <form class="m-t" role="form" action="" method="POST">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                <i class="fa fa-laptop modal-icon"></i>
                                <h4 class="modal-title">Nueva Tarea</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label><b>Detalle de la tarea</b></label>
                                    <textarea name="detalle" class="form-control"  rows="6" required="" ></textarea>
                                </div>
                                <div class="form-group">
                                    <label><b>Fecha vencimiento</b></label>
                                    <input type="date" name="fecha" class="form-control" required="" ></input>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-white" data-dismiss="modal">Cancelar</button>
                                <button type="submit" name="crear" class="btn btn-primary">Guardar Tarea</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class=" wrapper-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="widget style1 navy-bg">
                                <div class="row">
                                    <div class="col-4">
                                        <i class="fa fa-thumbs-up fa-5x"></i>
                                    </div>
                                    <div class="col-8 text-right">
                                        <span> Finalizados </span>
                                        <h2 class="font-bold"><?= $realizados[0]->TOTAL ?></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="widget style1 lazur-bg">
                                <div class="row">
                                    <div class="col-4">
                                        <i class="fa fa-clock-o fa-5x"></i>
                                    </div>
                                    <div class="col-8 text-right">
                                        <span> No finalizados </span>
                                        <h2 class="font-bold"><?= $norealizados[0]->TOTAL ?></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ibox ">
                                <div class="ibox-title">
                                    <h5>Tareas</h5>
                                    <div class="ibox-tools">
                                        <button class="btn btn-success btn-xs" type="button" data-toggle="modal" data-target="#myModal4"><i class="fa fa-plus"></i> <span class="bold"></span></button>
                                    </div>
                                </div>
                                <div class="ibox-content">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover dataTables-example" >
                                            <thead>
                                                <tr>
                                                    <th>Detalle</th>
                                                    <th>Creacion</th>
                                                    <th>Vencimiento</th>
                                                    <th>Finalizo</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php  foreach ($tareas as $value) { ?>
                                                <tr>
                                                    <td><?= $value->Detalle; ?></td>
                                                    <td><?= $value->FechaCreacion; ?></td>
                                                    <td><?= $value->Finalizado; ?></td>
                                                    <td><?= $value->FechaVencimiento; ?></td>
                                                    <td>
                                                        <div class="modal inmodal" id="A<?= $value->idTareas; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content animated bounceInRight">
                                                                    <form class="m-t" role="form" action="" method="POST">
                                                                        <div class="modal-header">
                                                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                                                            <i class="fa fa-laptop modal-icon"></i>
                                                                            <h4 class="modal-title">Actualizar Tarea</h4>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="form-group">
                                                                                <label><b>Detalle de la tarea</b></label>
                                                                                <textarea name="detalle" class="form-control"  rows="6" required="" ><?= $value->Detalle; ?></textarea>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label><b>Fecha vencimiento</b></label>
                                                                                <input type="date" name="fecha" class="form-control" required="" value="<?= $value->FechaVencimiento; ?>" ></input>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label><b>Finalizo?</b></label>
                                                                                <select class="form-control m-b" name="finalizo">
                                                                                    <?php 
                                                                                    if ($value->Finalizado == 'NO') { ?>
                                                                                    <option value="NO">NO</option>
                                                                                    <option value="SI">SI</option>
                                                                                    <?php }else{ ?>
                                                                                    <option value="SI">SI</option>
                                                                                    <option value="NO">NO</option>
                                                                                    <?php } ?>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-white" data-dismiss="modal">Cancelar</button>
                                                                            <button type="submit" name="actualizar" value="<?= $value->idTareas; ?>" class="btn btn-primary">Actualizar Tarea</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal inmodal" id="E<?= $value->idTareas; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content animated fadeIn">
                                                                    <form class="m-t" role="form" action="" method="POST">
                                                                        <div class="modal-header">
                                                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                                                            <i class="fa fa-trash modal-icon"></i>
                                                                            <h4 class="modal-title">Este proceso es irreversible.!</h4>
                                                                            <?= $value->Detalle; ?>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
                                                                            <button type="submit" name="borrar" value="<?= $value->idTareas; ?>" class="btn btn-danger">Borrar tarea</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <center>
                                                            <button class="btn btn-warning btn-xs" type="button" data-toggle="modal" href="#A<?= $value->idTareas; ?>"><i class="fa fa-pencil"></i> <span class="bold"></span>
                                                            </button>
                                                            <button class="btn btn-danger btn-xs" type="button" data-toggle="modal" href="#E<?= $value->idTareas; ?>"><i class="fa fa-times"></i> <span class="bold"></span></button> 
                                                        </center>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
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