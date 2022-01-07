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
	<link href="<?= base_url()?>PLANTILLA/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
</head>
<body background="<?= base_url()?>PLANTILLA/imagenes/fondo1.png" class="gray-bg">
	<div class="middle-box text-center loginscreen animated fadeInDown">
		<div>
			<div>
				<img width="50%" src="<?= base_url()?>PLANTILLA/imagenes/g-ocho.png">
			</div>
			<h3>Bienvenido a G-ocho</h3>
			<p>Inicie sesión. Para verlo en acción.</p>
			<form class="m-t" role="form" action="" method="POST">
				<div class="form-group">
					<input type="text" class="form-control" name="nombre" placeholder="Nombre de usuario" required="">
				</div>
				<div class="form-group">
					<input type="password" class="form-control" name="contrasena" placeholder="Contraseña" required="">
				</div>
				<button type="submit" class="btn btn-primary block full-width m-b">Iniciar sesión</button>
				<p class="text-muted text-center"><small>¿No tiene una cuenta?</small></p>
				<a class="btn btn-sm btn-white btn-block" href="<?= base_url()?>registro">Crea una cuenta</a>
			</form>
			<p class="m-t"> <small>Guillermo Landazuri Amaya <script>document.write(new Date().getFullYear())</script> </small> </p>
		</div>
	</div>
	<!-- Mainly scripts -->
	<script src="<?= base_url()?>PLANTILLA/js/jquery-3.1.1.min.js"></script>
	<script src="<?= base_url()?>PLANTILLA/js/popper.min.js"></script>
	<script src="<?= base_url()?>PLANTILLA/js/bootstrap.js"></script>
	<!-- Sweet alert -->
	<script src="<?= base_url()?>PLANTILLA/js/plugins/sweetalert/sweetalert.min.js"></script>
	<?php 
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