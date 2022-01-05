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
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5>i18next configuration</h5>
                            </div>

                            <div class="ibox-content">


                                <h3>Step 1</h3>
                                <p>
                                    To add i18 support for your app you need to define what text you would like to translate. The best way to define your text is to store it in external json file.
                                    For example:
                                </p>
                                <strong>
                                    Each language you should have own json file!
                                </strong>

                                <div class="row">

                                    <div class="col-md-6">
                                        <h5>en.json</h5>
<pre>
"app":
"name": "INSPINIA 2.4"
},
"nav":
"dashboard": "Dashboards",
"graphs": "Graphs",
"mailbox": "Mailbox",
},
}</pre>
                            </div>
                            <div class="col-md-6">
                                <h5>es.json</h5>
<pre>
"app":
"name": "INSPINIA 2.4"
},
"nav":
"dashboard": "Salpicadero",
"graphs": "Gráficos",
"mailbox": "El correo",
},
}</pre>
                    </div>

                </div>

                <h3>Step 2</h3>
                <p>
                    Next you need to add html indicators in all place you want to use i18.
                </p>
<pre>&lt;div id="i18_links"&gt;
&lt;span data-i18n="nav.dashboard"&gt; &lt;/span&gt;
&lt;span data-i18n="nav.graphs"&gt; &lt;/span&gt;
&lt;span data-i18n="nav.mailbox"&gt; &lt;/span&gt;
&lt;/div&gt;
</pre>
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



</body>

</html>
