<?php 
Eliminaragricultura($_GET['idagricultura']);

function Eliminaragricultura($idagricultura)
{
	include 'php/conexion.php';
	$sentencia="delete from agricultura where idagricultura='".$idagricultura."'";
	$conexion->query($sentencia) or die("Error al borrar agricultura".mysqli_error($conexion));
}

?>
<script type="text/javascript">
	alert("agricultura eliminado");
	window.location.href='indexadministrador.php';

</script>