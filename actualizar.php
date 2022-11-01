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

		$sql="SELECT * FROM login WHERE id=$id";
	
		$ressql=mysqli_query($mysqli,$sql);
		while ($row=mysqli_fetch_row ($ressql)){
		    	$id=$row[0];
		    	$user=$row[1];
		    	$pass=$row[2];
		    	$email=$row[3];
		    	$pasadmin=$row[4];
                $rol=$row[5];
		    }



		?>
<body background= "images/fondo.jpg" style="background-attachment:fixed;">
<div style="text-align: center; background-color: #5dade2; margin-left: 30%; margin-right: 30%; border-radius: 15px; margin-top: 12%;">
	<form action="ejecutaactualizar.php" method="post";>
		<br>
			<p2>ID</p2>
<br>
            <input type="text" name="id" value= "<?php echo $id ?>" readonly="readonly">
			<br>Usuario<br> 
			<br>
			<input type="text" name="user" value="<?php echo $user?>">
			<br>Password usuario<br> 
			<br>
			<input type="text" name="pass" value="<?php echo $pass?>">
			<br>Correo usuario<br> 
			<br>
			<input type="text" name="email" value="<?php echo $email?>">
			<br>Pssword administrador<br> 
			<br>
            <input type="text" name="pasadmin" value="<?php echo $pasadmin?>">
            <br>Rol<br>
			<br>
            <input type="text" name="rol" value="<?php echo $rol?>">
            
			
				<br>
				<input  class="btn btn-primary" type="submit" value="Guardar" class="btn btn-success btn-primary">
			</form>
</div>
</body>

		

		