<?php
include 'conexion.php';

$id = $_REQUEST['id'];

$del = $con -> query("DELETE FROM estudiantes WHERE id = '$id' ");
if ($del) {
  echo "<script>
  location.href='formulario.php';
  </script>";
}else {
  echo "<script>
  alert('la cage el registro no pudo ser eliminado');
  location.href='formulario.php';
  </script>";
}
?>
