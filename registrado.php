<?php 

    $conectar = new PDO('mysql:host=localhost;dbname = academ', 'root', '');
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$contrasena = $_POST['contrasena'];
	$numero = $_POST['numero'];
	$descripcion = $_POST['descripcion'];
	$direccion = $_POST['direccion'];
	$valor= 4;

	$orden = "INSERT INTO beneficiario (user , email, direccion, numero, descripcion, contrasena, rol) VALUES ('$nombre', '$correo', '$direccion', '$numero','$descripcion', '$contrasena', '$valor' )";
	
	$resultado = $conectar->query($orden);

	if ($resultado) {
		header("Location: index.html");
		echo '<script>
				alert("Registro Exitoso");
				</script>';
	}else{

		echo "Error al Registrar";
	}
	require 'registrabene.html';

?>