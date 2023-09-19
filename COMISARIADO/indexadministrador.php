<!DOCTYPE html>
<html>
<title>Bienvenido administrador</title>
<center><head>
	<h1>COMISARIADO</h1>
</head></center>
<body>
	<a href="Formularioscomisariado.php"><button>Agregar </button></a></button>
<center><table >
	<tr>
		<td><b>Id COMISARIADO</b></td>
		<td><b><b><b>Nombre</b> </td>
		<td><b><b>Descripcion</b> </td>
	
		<td><b>Imagen</b></td>
		<td><b>Acciones</b></td>
	</tr>
<?php 
include "php/conexion.php";
$sentencia="select * from COMISARIADO";
$resultado = $conexion->query($sentencia) or die (mysqli_error($conexion));
while ($fila=$resultado->fetch_assoc())
{
	echo "<tr>";
	echo "<td>"; echo $fila['idcomisariado']; echo "</td>";
	echo "<td>"; echo $fila['nombre']; echo "</td>";
	echo "<td>"; echo $fila['descripcion']; echo "</td>";
	
	echo "<td>"; echo "<img src='./imagenes/".$fila['imagen']."' width='100'>"; echo "</td>";
	echo "<td><a href='modificar_comisariado.php?idcomisariado=".$fila['idcomisariado']."'><button type='button'>Modificar </button</a>";
	echo "<a href='eliminar_comisariado.php?idcomisariado=".$fila['idcomisariado']."'><button type='button'>Eliminar</button></a></td>";;
	echo "</tr>";
}
?>


</table>
</center>
</body>
</html>