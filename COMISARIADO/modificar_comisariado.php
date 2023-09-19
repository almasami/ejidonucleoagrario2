<?php
  
  $consulta=ConsultarProducto($_GET['idcomisariado']);

  function ConsultarProducto( $idcomisariado )
  {
    
   include 'php/conexion.php';
   $sentencia="SELECT * FROM comisariado WHERE idcomisariado='".$idcomisariado."' ";
   $resultado= $conexion->query($sentencia) or die ("Error al consultar producto".mysqli_error($conexion)); 
   $fila=$resultado->fetch_assoc();

   return [
    $fila['idcomisariado'],
    $fila['NombrePresidente'],
    $fila['NombreSecretario'],
    $fila['NombreTesorero'],
    $fila['NombreVigilancia'],
    $fila['Inicio'],
    $fila['Fin'],
    $fila['imagen'],
   ];
  }
?>
<html>
    <head>
 
    </head>
    
<title>Modificar comisariado</title>

<body>
<div class="todo">
  
  
  </div>
   <div id="contenido">
  	<div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<span> <h1>Modificar comisariado</h1> </span>
  		<br>
	  <form action="modif_comisariado2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
      <input type="hidden"  name="no"  value="<?php echo $_GET['idcomisariado']?>"><table>
               <tr><td>
      <input type="hidden"  name="idcomisariado"  value="<?php echo $_GET['idcomisariado']?>">
  		</td></tr>
               <tr><td>
  		<label>Nombre Presidente: </label>
  		<input type="text" id="comisariado" name="NombrePresidente" value="<?php echo $consulta[1] ?>"><br><tr><td>
  		
          <tr><td>
          <label>NombreSecretario: </label>
  		<input type="text" id="comisariado" name="NombreSecretario" value="<?php echo $consulta[2] ?>"><br><tr><td>
      <tr><td>
          <label>NombreTesorero: </label>
  		<input type="text" id="comisariado" name="NombreTesorero" value="<?php echo $consulta[3] ?>"><br><tr><td>
      <tr><td>
          <label>NombreVigilancia: </label>
  		<input type="text" id="comisariado" name="NombreVigilancia" value="<?php echo $consulta[4] ?>"><br><tr><td>
      <tr><td>
          <label>Inicio: </label>
  		<input type="text" id="comisariado" name="Inicio" value="<?php echo $consulta[5] ?>"><br><tr><td>
      <tr><td>
          <label>Fin: </label>
  		<input type="text" id="comisariado" name="Fin" value="<?php echo $consulta[6] ?>"><br><tr><td>
        
          
  		
          <tr><td>
          <label>Imagen: </label>
  		  <input type="text" id="comisariado" name="imagen" value="<?php echo $consulta[7] ?>"><br><tr><td>
          <tr><td>
         
  		<button type="submit" class="btn btn-success">Modificar</button>
     </form>
  	</div>
  </div>
	
  	</div>
</div>
</body>
</html>