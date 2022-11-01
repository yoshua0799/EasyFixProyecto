<?php


extract($_POST);	
	require("connect_db.php");
	$sentencia="update beneficiario set user='$user', email='$email', direccion='$direccion', numero='$numero', descripcion='$descripcion',  contrasena='$contrasena',  rol='$rol' where id='$id'";
	
	$resent=mysqli_query($mysqli,$sentencia);
	if ($resent==null) {
		echo "Error de procesamieno no se han actuaizado los datos";
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
		header("location: tabladonadores.php");
		
		echo "<script>location.href='admin.php'</script>";
	}else {
		echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
		
		echo "<script>location.href='admin.php'</script>";

		
	}
?>