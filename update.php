<?php include 'conexion.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$paterno = $_POST['paterno'];
$materno = $_POST['materno'];


$up = $con -> query ("UPDATE estudiantes SET nombre='$nombre', paterno ='$paterno', materno='$materno'
   WHERE id= '$id' ");//sentencia
if($up){
  echo "<script>
  location.href='formulario.php';
  </script>";
}else{
  echo "<script>
  location.href='actualizar.php?id=".$id."';
  </script>";
}



 ?>
