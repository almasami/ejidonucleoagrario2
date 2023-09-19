<?php
	
	Modificarcomisariado($_POST['idcomisariado'], $_POST['NombrePresidente'], $_POST['NombreSecretario'],
	  $_POST['NombreTesorero'],$_POST['NombreVigilancia'],$_POST['Inicio'], $_POST['Fin'])

	function Modificarcomisariado($idcomisariado, $NombrePresidente, $NombreSecretario,
	 $NombreTesorero, $NombreVigilancia, $Inicio, $Fin)
	{
		include 'php/conexion.php';
		echo $sentencia="UPDATE comisariado SET 
		 NombrePresidente='".$NombrePresidente."',
		 NombreSecretario='".$NombreSecretario."',
		NombreTesorero='".$NombreTesorero."',
		NombreVigilancia='".$NombreVigilancia."',
		Inicio='".$Inicio."',
		Fin='".$Fin."',

		 imagen='".$imagen."' WHERE idcomisariado='".$idcomisariado."' ";
		$conexion->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Datos Actualizados Exitosamante!!");
	window.location.href='indexadministrador.php';
</script>