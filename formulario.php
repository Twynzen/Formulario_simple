<?php include 'conexion.php' ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="calculadora.php" method="post">
      <input type="text" name="valor1" placeholder="Valor 1"> <br>
      <input type="text" name="valor2" placeholder="Valor 2"> <br>
      <input type="text" name="valor3" placeholder="Valor 3"> <br>
      <input type="text" name="valor4" placeholder="Valor 4"> <br>
      <input type="radio" name="operador" value="0" > suma <br>
      <input type="radio" name="operador" value="1" > resta <br>
      <input type="radio" name="operador" value="2" > multiplicación <br>
      <input type="radio" name="operador" value="3" > división <br>
      <input type="submit" value="Calcular">
    </form >
    <br>
    <form action="guardar.php" method="post">
      <input type="text" name="nombre" placeholder="Nombre de Estudiante"><br>
      <input type="text" name="paterno" placeholder="Nombre de paterno"><br>
      <input type="text" name="materno" placeholder="Nombre de materno"><br>
      <input type="submit"  value="Guardar">
    </form>
      <br>
    <table>
      <th>id</th>
      <th>nombre</th>
      <th>apellido paterno</th>
      <th>apellido materno</th>
      <?php
      $sel = $con ->query("SELECT * FROM estudiantes ");
      while ($fila = $sel -> fetch_assoc()) {
       ?>
       <tr>
         <td><?php echo $fila['id']; ?></td>
         <td><?php echo $fila['nombre']; ?></td>
         <td><?php echo $fila['paterno']; ?></td>
         <td><?php echo $fila['materno']; ?></td>
         <td><a href="actualizar.php?id= <?php echo $fila['id'] ?>">EDITAR</a></td>
       </tr>
     <?php } ?>
    </table>

  </body>
</html>
