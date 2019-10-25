<?php
/*Se utiliza por si se realiza algún cambio en la conexion a la base de datos
solo se modifica un archivo */
include 'conexion.php';
$nombre = $_POST['nombre'];
$paterno = $_POST['paterno'];
$materno = $_POST['materno'];
$ins = $con -> query("INSERT INTO estudiantes (id, nombre, paterno, materno) VALUES('','$nombre','$paterno','$materno')");//sentencia
if ($ins){
  echo "guardo";
}else {
  echo "no guardo";
}

 ?>
