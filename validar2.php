<?php
//include("connect_db.php");

//$miconexion = new connect_db;


	session_start();
	require("connect_db.php");

	$username= $_POST['email'];
	$passben= $_POST['contrasena'];


	


	$sql=mysqli_query($mysqli,"SELECT * FROM beneficiario WHERE email='$username'");
	if($f=mysqli_fetch_assoc($sql)){
		if($passben==$f['contrasena']){
			$_SESSION['id']=$f['id'];
			$_SESSION['user']=$f['user'];
			$_SESSION['rol']=$f['rol'];

			header("Location: beneficiario.php");
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='index2.php'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='registrabeneficiario.html'</script>";	

	}
	

?>

