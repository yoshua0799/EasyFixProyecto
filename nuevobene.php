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
<div style="text-align: center; background-color:#f5c26f; margin-left: 30%; margin-right: 30%; border-radius: 15px; margin-top: 12%;" >
		<form action="newregistro2.php" method="POST">
				<h5 style="color: white;">Registra Beneficiario</h5>
				<br>
				<h6>Nombre</h6>
				<br>
				<input type="text" name="user" placeholder="Nombre" required>
				<br>
				<h6>Correo</h6>
				<br>
				<input type="email" name="email" placeholder="usuario@gmail.com" required>
				<br>
				<h6>Direccion</h6>
				<br>
				<input type="text" name="direccion" placeholder="Direccion"   />
				<br>
				<h6>Numero</h6>
				<input type= "text" name="numero"  placeholder="Ejem. 33-00-00-00-00"  />
				<br>
				<h6>Descripcion</h6>
				<br>
				<input type="text" name="descripcion" placeholder="Caracteristicas de la Asociación"  />
				<br>
				<p>Contrase&ntilde;a</p>
				<br>
				<input type="password" name="contrasena" id="contrasena" size="20" />
				<br>
				<p>Rol</p>
				<br>
				<input type="text" name="rol" size="20" />
				<br>
				<input class="btn btn-primary" type="submit" name="Enviar" />
			</form>
		</div>
</body>
		