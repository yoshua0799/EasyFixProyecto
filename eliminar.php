<<?php 
	
	
	EliminarUsuario($_GET['id']);
	function EliminarUsuario($id)
	{
		$conectar= new mysqli('localhost','root', '', 'academ');
		$orden="DELETE FROM login WHERE id='".$id."' ";
		$conectar->query($orden) or die("Error al Eliminar".mysqli_error($conectar));
		

	}
 ?>
 <script type="text/javascript">
 	alert("Ha sido Eliminado el Usuario");
 	window.location.href='tabladonadores.php';
 </script>