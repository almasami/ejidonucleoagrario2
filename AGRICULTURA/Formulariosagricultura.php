<?php


include("php/conexion.php");
if( isset($_POST['txtnombre'])){
    $directorio="imagenes";
    $formatos=array('.jpg','.png','.gif','.jpeg');
    $nombreimagen=$_FILES['txtimagen']['name'];
    $nombretemporalimagen=$_FILES['txtimagen']['tmp_name'];
    if(move_uploaded_file($nombretemporalimagen,"$directorio/$nombreimagen")){
    
    $nombre=$_POST['txtnombre'];
    $descripcion=$_POST['txtdescripcion'];
     
   
    
    $sql="insert into ganaderia(nombre,descripcion,imagen)
    values('".$nombre."','".$descripcion."','".$nombreimagen."')";
    mysqli_query($conexion,$sql);
    echo '
    <script type="text/javascript">
    alert("se ha agregado un nuevo producto");
    window.location="indexadministrador.php";
    </script>
    ';

    }else{
        echo '
        <script>alert("no se puede mover la imagen");</script>
        ';
    }
}
?>
<html>
    <head>  

</head>
<body>
<h1 class="tituloRegistro">AGREGAR AGRICULTURA</h1>
 <form class="formulario" method="POST" action="Formulariosagricultura.php" enctype="multipart/form-data">
 
 <div class="mb-3">
      <label class="form-label">ingresa el nombre del producto</label>
      <input type="text" class="form-control"name="txtnombre" required>
      </div>

      <div class="mb-3">
      <label class="form-label">ingrese una descripcion</label>
      <input type="text" class="form-control"name="txtdescripcion"require>
      </div>

     

       
        <div class="mb-3">
      <input type="file" class="form-control"name="txtimagen" required>
      </div>
      <button type="submit"  width="16" height="16" >
  
</svg>Registrar</button>
       </form>
    </body>
</html>

