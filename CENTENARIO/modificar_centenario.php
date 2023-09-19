<?php
  
  $consulta=ConsultarProducto($_GET['idcentenario']);

  function ConsultarProducto( $idcentenario )
  {
    
   include 'php/conexion.php';
   $sentencia="SELECT * FROM centenario WHERE idcentenario='".$idcentenario."' ";
   $resultado= $conexion->query($sentencia) or die ("Error al consultar producto".mysqli_error($conexion)); 
   $fila=$resultado->fetch_assoc();

   return [
    $fila['idcentenario'],
    $fila['nombre'],
    $fila['descripcion'],
    $fila['imagen'],
   ];
  }
?>
<html>
    <head>
 
    </head>
    
<title>Modificar centenario</title>

<body>
<div class="todo">
  
  
  </div>
   <div id="contenido">
  	<div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<span> <h1>Modificar centenario</h1> </span>
  		<br>
	  <form action="modif_centenario2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
      <input type="hidden"  name="no"  value="<?php echo $_GET['idagricultura']?>"><table>
               <tr><td>
      <input type="hidden"  name="idcentenario"  value="<?php echo $_GET['idcentenario']?>">
  		</td></tr>
               <tr><td>
  		<label>Nombre centenario: </label>
  		<input type="text" id="producto" name="nombre" value="<?php echo $consulta[1] ?>"><br><tr><td>
  		
          <tr><td>
          <label>Descripcion: </label>
  		<input type="text" id="producto" name="descripcion" value="<?php echo $consulta[2] ?>"><br><tr><td>
        
          
  		
          <tr><td>
          <label>Imagen: </label>
  		  <input type="text" id="producto" name="imagen" value="<?php echo $consulta[3] ?>"><br><tr><td>
          <tr><td>
         
  		<button type="submit" class="btn btn-success">Modificar</button>
     </form>
  	</div>
  </div>
	
  	</div>
</div>
</body>
</html>