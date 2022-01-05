<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>G-ocho</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url()?>PLANTILLA/imagenes/g-ocho.png">
    <link href="<?= base_url()?>PLANTILLA/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url()?>PLANTILLA/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?= base_url()?>PLANTILLA/css/animate.css" rel="stylesheet">
    <link href="<?= base_url()?>PLANTILLA/css/style.css" rel="stylesheet">
    <link href="<?= base_url()?>PLANTILLA/css/plugins/dataTables/datatables.min.css" rel="stylesheet">
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
                                <a href="login.html">
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
    <!-- Mainly scripts -->
    <script src="<?= base_url()?>PLANTILLA/js/jquery-3.1.1.min.js"></script>
    <script src="<?= base_url()?>PLANTILLA/js/popper.min.js"></script>
    <script src="<?= base_url()?>PLANTILLA/js/bootstrap.js"></script>
    <script src="<?= base_url()?>PLANTILLA/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?= base_url()?>PLANTILLA/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?= base_url()?>PLANTILLA/js/inspinia.js"></script>
    <script src="<?= base_url()?>PLANTILLA/js/plugins/pace/pace.min.js"></script>

    <!-- Flot -->
    <script src="<?= base_url()?>PLANTILLA/js/plugins/flot/jquery.flot.js"></script>
    <script src="<?= base_url()?>PLANTILLA/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="<?= base_url()?>PLANTILLA/js/plugins/flot/jquery.flot.resize.js"></script>

    <!-- ChartJS-->
    <script src="<?= base_url()?>PLANTILLA/js/plugins/chartJs/Chart.min.js"></script>

    <!-- Peity -->
    <script src="<?= base_url()?>PLANTILLA/js/plugins/peity/jquery.peity.min.js"></script>
    <!-- Peity demo -->
    <script src="<?= base_url()?>PLANTILLA/js/demo/peity-demo.js"></script>

    <!-- Data Tables -->
    <script src="<?= base_url()?>PLANTILLA/js/plugins/dataTables/datatables.min.js"></script>
    <script src="<?= base_url()?>PLANTILLA/js/plugins/dataTables/dataTables.bootstrap4.min.js"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 10,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                { extend: 'copy'},
                {extend: 'csv'},
                {extend: 'excel', title: 'ExampleFile'},
                {extend: 'pdf', title: 'ExampleFile'},

                {extend: 'print',
                customize: function (win){
                    $(win.document.body).addClass('white-bg');
                    $(win.document.body).css('font-size', '10px');

                    $(win.document.body).find('table')
                    .addClass('compact')
                    .css('font-size', 'inherit');
                }
            }
            ]

        });

        });

    </script>

</body>

</html>
