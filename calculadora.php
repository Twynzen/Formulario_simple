<?php
//$val1= $_GET['valor1']; //El emtodo get no es recomendable usarlo en formularios segun el man del tuto
$val1= $_POST['valor1'];
$val2= $_POST['valor2'];
$val3= $_POST['valor3'];
$val4= $_POST['valor4'];
$operador = $_POST['operador'];

function calcular ($v1,$v2){
  $ope = $_POST['operador'];
  switch ($ope) {
    case 0:
      $res = $v1 + $v2;
      break;
    case 1:
      $res = $v1 - $v2;
      break;
    case 2:
      $res = $v1 * $v2;
      break;
    case 3:
      $res = $v1 / $v2;
      break;

  }
  return $res;
}

$operacion = array('SUMA','RESTA','MULTIPLICACION','DIVISION');

echo "El resultado de la primera es: ".$operacion[$operador]." ". calcular($val1, $val2);
echo "<br>";
echo "El resultado de la segunda es: ".$operacion[$operador]." ". calcular($val3, $val4);

 ?>
