<?php


include("php/conexion.php");
if( isset($_POST['txtNombre Presidente'])){
    $directorio="imagenes";
    $formatos=array('.jpg','.png','.gif','.jpeg');
    $nombreimagen=$_FILES['txtimagen']['name'];
    $nombretemporalimagen=$_FILES['txtimagen']['tmp_name'];
    if(move_uploaded_file($nombretemporalimagen,"$directorio/$nombreimagen")){
    
    $NombrePresidente=$_POST['txtNombre Presidente'];
    $NombreSecretario=$_POST['txtNombre Secretario'];
    $NombreTesorero=$_POST['txtNombre Tesorero'];
    $NombreVigilancia=$_POST['txtNombre Vigilancia'];
    $Inicio=$_POST['txtInicio'];
    $Fin=$_POST['txtFin'];
    
    $sql="insert into comisariado(Nombre Presidente, Nombre Secretario, Nombre Tesorero, Nombre Vigilancia, Inicio, Fin)
    values('".$NombrePresidente."','".$NombreSecretario."','".$NombreTesorero."','".$NombreVigilancia."','".$Inicio."','".$Fin."'    )";
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
<h1 class="tituloRegistro">AGREGAR COMISARIADO</h1>
 <form class="formulario" method="POST" action="Formulariosagricultura.php" enctype="multipart/form-data">
 
 <div class="mb-3">
      <label class="form-label">Ingrese el nombre del Presidente</label>
      <input type="text" class="form-control"name="txtNombrePresidente" required>
      </div>

      <div class="mb-3">
      <label class="form-label">Ingrese el nombre del Secretario</label>
      <input type="text" class="form-control"name="txtNombreSecretario"require>
      </div>

      <div class="mb-3">
      <label class="form-label">Ingrese el nombre del Tesorero</label>
      <input type="text" class="form-control"name="txtNombreTesorero"require>
      </div>

      <div class="mb-3">
      <label class="form-label">Ingrese el nombre de Vigilancia</label>
      <input type="text" class="form-control"name="txtNombreVigilancia"require>
      </div>

<div class="mb-3">
      <label class="form-label">Ingrese el Inicio</label>
      <input type="text" class="form-control"name="txtInicio"require>
      </div>

      <div class="mb-3">
      <label class="form-label">Ingrese el fin</label>
      <input type="text" class="form-control"name="txtFin"require>
      </div>
       
        <div class="mb-3">
      <input type="file" class="form-control"name="txtimagen" required>
      </div>
      <button type="submit"  width="16" height="16" >
  
</svg>Registrar</button>
       </form>
    </body>
</html>

