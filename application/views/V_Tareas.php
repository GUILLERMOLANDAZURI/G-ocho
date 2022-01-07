<!DOCTYPE html>
<html>
<head>
<?php require_once 'inc/css.php'; ?>
</head>
<body class="top-navigation">
    <div id="wrapper">
        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom white-bg">
                <nav class="navbar navbar-expand-lg navbar-static-top" role="navigation">
                    <a href="#" class="navbar-brand">G-ocho</a>
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-reorder"></i>
                    </button>
                    <div class="navbar-collapse collapse" id="navbar">
                        <ul class="nav navbar-nav mr-auto">
                            <li><a href="<?= base_url()?>usuario">USUARIO</a></li>
                            <li><a href="<?= base_url()?>bienvenido">TAREAS</a></li>
                            <li><a href="<?= base_url()?>api">API</a></li>
                        </ul>
                        <ul class="nav navbar-top-links navbar-right">
                            <li>
                                <a href="<?= base_url()?>salir">
                                    <i class="fa fa-sign-out"></i>  Cerrar sesión
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
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
                                        <h2 class="font-bold">260</h2>
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
                                        <h2 class="font-bold">260</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="widget style1 yellow-bg">
                                <div class="row">
                                    <div class="col-4">
                                        <i class="fa fa-bell fa-5x"></i>
                                    </div>
                                    <div class="col-8 text-right">
                                        <span> Reprogramados </span>
                                        <h2 class="font-bold">260</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="widget style1 red-bg">
                                <div class="row">
                                    <div class="col-4">
                                        <i class="fa fa-trash fa-5x"></i>
                                    </div>
                                    <div class="col-8 text-right">
                                        <span> Eliminados </span>
                                        <h2 class="font-bold">260</h2>
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
                                </div>
                                <div class="ibox-content">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover dataTables-example" >
                                            <thead>
                                                <tr>
                                                    <th>Detalle</th>
                                                    <th>Creacion</th>
                                                    <th>Vencimiento</th>
                                                    <th>Estado</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr class="gradeA">
                                                    <td>Gecko</td>
                                                    <td>Firefox 2.0</td>
                                                    <td>Win 98+ / OSX.2+</td>
                                                    <td>1.8</td>
                                                    <td>
                                                        <center>
                                                            <button class="btn btn-success btn-xs" data-toggle="modal" type="button" href="#modal1"><i class="fa fa-eye"></i> <span class="bold"></span></button>
                                                            <button class="btn btn-warning btn-xs" data-toggle="modal" type="button" href="#modal2"><i class="fa fa-pencil"></i> <span class="bold"></span></button>
                                                            <button class="btn btn-danger btn-xs" name="borrar" type="button"><i class="fa fa-times"></i> <span class="bold"></span></button> 
                                                        </center>
                                                    </td>
                                                </tr>
                                                <tr class="gradeA">
                                                    <td>Gecko</td>
                                                    <td>Firefox 3.0</td>
                                                    <td>Win 2k+ / OSX.3+</td>
                                                    <td>1.8</td>
                                                    <td>
                                                        <center>
                                                            <button class="btn btn-success btn-xs" data-toggle="modal" type="button" href="#modal1"><i class="fa fa-eye"></i> <span class="bold"></span></button>
                                                            <button class="btn btn-warning btn-xs" data-toggle="modal" type="button" href="#modal2"><i class="fa fa-pencil"></i> <span class="bold"></span></button>
                                                            <button class="btn btn-danger btn-xs" name="borrar" type="button"><i class="fa fa-times"></i> <span class="bold"></span></button> 
                                                        </center>
                                                    </td>
                                                </tr>
                                                <tr class="gradeA">
                                                    <td>Gecko</td>
                                                    <td>Camino 1.0</td>
                                                    <td>OSX.2+</td>
                                                    <td>1.8</td>
                                                    <td>
                                                        <center>
                                                            <button class="btn btn-success btn-xs" data-toggle="modal" type="button" href="#modal1"><i class="fa fa-eye"></i> <span class="bold"></span></button>
                                                            <button class="btn btn-warning btn-xs" data-toggle="modal" type="button" href="#modal2"><i class="fa fa-pencil"></i> <span class="bold"></span></button>
                                                            <button class="btn btn-danger btn-xs" name="borrar" type="button"><i class="fa fa-times"></i> <span class="bold"></span></button> 
                                                        </center>
                                                    </td>
                                                </tr>

                                                <tr class="gradeU">
                                                    <td>Other browsers</td>
                                                    <td>All others</td>
                                                    <td>-</td>
                                                    <td>1.8</td>
                                                    <td>
                                                        <center>
                                                            <button class="btn btn-success btn-xs" data-toggle="modal" type="button" href="#modal1"><i class="fa fa-eye"></i> <span class="bold"></span></button>
                                                            <button class="btn btn-warning btn-xs" data-toggle="modal" type="button" href="#modal2"><i class="fa fa-pencil"></i> <span class="bold"></span></button>
                                                            <button class="btn btn-danger btn-xs" name="borrar" type="button"><i class="fa fa-times"></i> <span class="bold"></span></button> 
                                                        </center>
                                                    </td>
                                                </tr>
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
</body>

</html>
