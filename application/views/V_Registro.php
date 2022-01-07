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
	<div class="loginColumns animated fadeInDown">
		<div class="row">

			<div class="col-md-6">
				<center>
					<img width="40%" src="<?= base_url()?>PLANTILLA/imagenes/g-ocho.png">

					<h2 class="font-bold">Bienvenido a G-ocho</h2>
					<p>
						En esta gran plataforma podras realizar la gestion de usuarios, gestion de tareas y encontraras el manual de uso de la API
					</p>
				</center>
			</div>
			<div class="col-md-6">
				<div class="ibox-content">
					<form class="m-t" role="form" action="" method="POST">
						<div class="form-group">
							<input type="text" class="form-control" name="nombre" placeholder="Nombre de usuario" required="">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" name="contrasena" placeholder="Contraseña" required="">
						</div>
						<button type="submit" class="btn btn-primary block full-width m-b">Crear cuenta</button>
						<p class="text-muted text-center">
							<small>¿Ya tiene una cuenta?</small>
						</p>
						<a class="btn btn-sm btn-white btn-block" href="<?= base_url()?>">Iniciar sesión</a>
					</form>
				</div>
			</div>
		</div>
		<hr/>
		<div class="row">
			<div class="col-md-6">
				Guillermo Landazuri Amaya
			</div>
			<div class="col-md-6 text-right">
				<small>© <script>document.write(new Date().getFullYear())</script> </small>
			</div>
		</div>
	</div>
	<!-- Sweet alert -->
	<script src="<?= base_url()?>PLANTILLA/js/plugins/sweetalert/sweetalert.min.js"></script>
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