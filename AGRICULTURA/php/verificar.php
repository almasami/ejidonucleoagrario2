<?php
include ("conexion.php");
session_start();
$usuario=$_POST['txtusuario'];
$pass=$_POST['txtpassword'];
$sql="select * from usuarios where usuario='".$usuario."' and password='".$pass."'";
$resultado=mysqli_query($conexion, $sql);
$fila=mysqli_num_rows($resultado);
if ($fila>0){
	echo 'se ha encontrado un registro';
	header("location:../index1.php");
}
else{
	echo 'No se encuentra en la base de datos';
}
?>