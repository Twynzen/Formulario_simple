<?php include 'conexion.php';
$id = $_REQUEST['id'];

$sel = $con -> query("SELECT * FROM estudiantes WHERE id='$id'");
if ($fila = $sel -> fetch_assoc()) {
}
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>

     <br>
     <form action="update.php" method="post">
       <input type="hidden" name="id" value="<?php echo $id ?>">
       <input type="text" name="nombre" placeholder="Nombre de Estudiante" value="<?php echo $fila['nombre'] ?>"><br>
       <input type="text" name="paterno" placeholder="Nombre de paterno" value="<?php echo $fila['paterno'] ?>"><br>
       <input type="text" name="materno" placeholder="Nombre de materno" value="<?php echo $fila['materno'] ?>"><br>
       <input type="submit"  value="Actualizar">
     </form>
       <br>

   </body>
 </html>
