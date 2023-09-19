<?php 
Eliminarcomisariado($_GET['idcomisariado']);

function Eliminarcomisariado($idcomisariado)
{
	include 'php/conexion.php';
	$sentencia="delete from comisariado where idcomisariado='".$idcomisariado."'";
	$conexion->query($sentencia) or die("Error al borrar comisariado".mysqli_error($conexion));
}

?>
<script type="text/javascript">
	alert("agricultura eliminado");
	window.location.href='indexadministrador.php';

</script>