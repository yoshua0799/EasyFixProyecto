<!DOCTYPE html>
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

 
		<?php
		extract($_GET);
		require("connect_db.php");

		$sql="SELECT * FROM beneficiario WHERE id=$id";
	
		$ressql=mysqli_query($mysqli,$sql);
		while ($row=mysqli_fetch_row ($ressql)){
		    	$id=$row[0];
		    	$user=$row[1];
                $email=$row[2];
                $direccion=$row[3];
                $numero=$row[4];
                $descripcion=$row[5];
		    	$contrasena=$row[6];
                $rol=$row[7];
                
		    }
		?>

<body background= "images/fondo.jpg" style="background-attachment:fixed;">
	<div style="text-align: center; background-color:#f5c26f; margin-left: 30%; margin-right: 30%; border-radius: 15px; margin-top: 9%; heigth: 10%">
		<form action="ejecutaactualizar2.php" method="post";>
			<br>
			<p2>ID</p2>
			<br>
            <input type="text" name="id" value= "<?php echo $id ?>" readonly="readonly">
			<br>Usuario<br> 
			<br>
			<input type="text" name="user" value="<?php echo $user?>">
            <br>Correo usuario<br> 
			<br>
			<input type="text" name="email" value="<?php echo $email?>">
            <br>Dirección<br> 
			<br>
			<input type="text" name="direccion" value="<?php echo $direccion?>">
            <br>Número<br> 
			<br>
			<input type="text" name="numero" value="<?php echo $numero?>">
            <br>Descripcion<br> 
			<br>
			<input type="text" name="descripcion" value="<?php echo $descripcion ?>">
			<br>Password usuario<br> 
			<br>
			<input type="text" name="contrasena" value="<?php echo $contrasena?>">
            <br>Rol<br>
			<br>
            <input type="text" name="rol" value="<?php echo $rol?>">
			<br>
				<input type="submit" value="Guardar" class="btn btn-success btn-primary">
			</form>
	</div>
</body>

		

		