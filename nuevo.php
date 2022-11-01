<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index.html");
}if ($_SESSION['rol']==2) {
	header("Location:donador.php");
}if($_SESSION['rol'] == 4){
    header("Location:index.html");
}elseif($_SESSION['rol'] ==3){
    header("Location:beneficiario.php");
}

?>
<?php
	include 'temp/cabeceraadmin.php';
	?>
	
<body background= "images/fondo.jpg" style="background-attachment:fixed;">
	<div style="text-align: center; background-color: #5dade2; margin-left: 30%; margin-right: 30%; border-radius: 15px; margin-top: 12%;">
		<form action="newregistro.php" method="POST">
				<br>
				<h4 style="color: white;">Registra Donador</h4>
				<br>
				<p2>Nombre</p2>
				<br>
				<input type="text" name="nombre" placeholder="Nombre" required>
				<br>
				<p2>Usuario</p2>
				<br>
				<input type="email" name="correo" placeholder="usuario@gmail.com" required>
				<br>
				<p2>Contrase&ntilde;a</p2>
				<br>
				<input name="contrasena" type="password" id="contrasena" size="20" />
				<br>
				<input class="btn btn-primary" type="submit" name="Enviar">
		</form>
	</div>
</body>
		