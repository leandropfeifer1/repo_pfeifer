<?php
$resultado = null;
$numero1 = $_GET['num1'];
$numero2 = $_GET['num2'];
$operacion = $_GET['operacion'];

// (int) cambia el tipo de dato de String a Integer
$num1 = (int) $numero1;
$num2 = (int) $numero2;

// Un Switch sería más efectivo
if($operacion == "suma"){
	$resultado = $num1 + $num2;
} else if($operacion == "resta"){
	$resultado = $num1 - $num2;
} else if($operacion == "multiplicacion"){
	$resultado = $num1 * $num2;
} else{
	$resultado = $num1 / $num2;
}

print "<h1>El resultado es: $resultado</h1>";
print "<a href='http://localhost/Examples/Ejercicios/calc.php'>Volver</a>"
?>
