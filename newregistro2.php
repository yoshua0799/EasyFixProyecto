<?php 

$conectar = new PDO('mysql:host=localhost;dbname=academ', 'root', '');
$nombre = $_POST['user'];
$correo = $_POST['email'];
$contrasena = $_POST['contrasena'];
$numero = $_POST['numero'];
$descripcion = $_POST['descripcion'];
$direccion = $_POST['direccion'];
$rol = $_POST['rol'];


	
	$orden = "INSERT INTO beneficiario (user , email, direccion, numero, descripcion, contrasena, rol) VALUES ('$nombre', '$correo', '$direccion', '$numero','$descripcion', '$contrasena', '$rol' )"; 
	
	$resultado = $conectar->query($orden);

	if ($resultado) {
		header("Location: admin.php");
		echo '<script>
				alert("Registro Exitoso")
				</script>';
	}else{
        header("Location: nuevobene.php");
		echo '<script>
		alert("Registro Fallido")
		</script>';
	}


?>