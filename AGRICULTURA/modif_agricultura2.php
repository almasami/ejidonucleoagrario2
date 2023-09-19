<?php
	
	Modificaragricultura($_POST['idagricultura'], $_POST['nombre'], $_POST['descripcion'],  $_POST['imagen']);

	function Modificaragricultura($idagricultura, $nombre, $descripcion,   $imagen)
	{
		include 'php/conexion.php';
		echo $sentencia="UPDATE ganaderia SET  nombre='".$nombre."', descripcion='".$descripcion."',
		 imagen='".$imagen."' WHERE idagricultura='".$idagricultura."' ";
		$conexion->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Datos Actualizados Exitosamante!!");
	window.location.href='indexadministrador.php';
</script>