EJERCICIO 3
<br>
<br>
<?php
	$cadena = "hola mundo";
	echo $cadena;
	$resultado = str_replace("hola mundo", "tierra", $cadena);
	echo "<br><br>La frase cambiada es: " . $resultado;
?>
<br>
<br>
<br>
EJERCICIO 4
<br>
<br>
<?php
  $a=12;
  $b=10;
  if($a>$b)
  print "hola mundo";
?>
<br>
<br>
<br>
EJERCICIO 5
<br>
<br>

<form action="Bienvenido.php" method="get">
Nombre: <input type="text" name="nombre">
Apellido: <input type="text" name="apellido">
<input type=submit value="submit" />
</form>

EJERCICIO 6
<br>
<br>

<form action="calculadora.php" method="get">
Operacion: <input type="text" name="cadena1">
Numero 1: <input type="int" name="a">
Numbero 2: <input type="int" name="b">
<input type=submit value="submit" />
</form>

EJERCICIO 7
<br>
<br>
<form action="consumo.php" method="get">
Ingrese la cantidad de Kw consumidos: <input type="int" name="k">
<input type=submit value="submit" />

</form>

EJERCICIO 8
<br>
<br>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h1>Cadena A</h1>
		<?php
			$texto = 'El abecedario completo es algo largo y detallarlo exhaustivamente es costoso';
			$vocales = ['a', 'e', 'i', 'o', 'u'];
			$msg = ' Numero de veces que se repiten las vocales en la cadena de texto:<br/>' . $texto . '<br/>';
			for($i = 0; $i < count($vocales); $i++) {
				$msg = $msg . 'La letra ' . $vocales[$i] . ' aparece ' . substr_count($texto, $vocales[$i]) . ' veces.<br/>';
			}
			echo ($msg);
		?>
		<hr>
		<h1>Cadena B</h1>
		<?php
			$textoToLower = strtolower($texto);
			$arrayLetras = count_chars($textoToLower, 1); 
			$msg = ' Numero de veces que se repiten las consonantes en la cadena de texto:<br/>' . $texto . '<br/>';
			foreach($arrayLetras as $indiceNum => $veces) {
				if($indiceNum<>32 && $indiceNum<>97 && $indiceNum<>101 && $indiceNum<>105 && $indiceNum<>111 && $indiceNum<>117){
					$msg = $msg . 'La letra ' . chr($indiceNum) . ' aparece ' . $veces . ' veces<br/>';
				}
			}
			echo ($msg);
		?>
		<hr>
		<h1>Cadena C</h1>
		<?php
			$msg = 'Teniendo la cadena de texto:<br/>' . $texto . '<br/>Sustituiremos todas las "a" por el simbolo "*".<br/>';
			$msg = $msg . str_replace('a', '*', $texto);
			echo ($msg);
		?>
		<hr>
		<h1>Cadena D</h1>
		<?php
			$msg = 'Teniendo la cadena de texto:<br/>' . $texto . '<br/>Mostramos la subcadena:<br/>';
			$msg = $msg . ltrim(strstr($texto, 'completo'), 'completo');
			echo ($msg);
		?>	
	</body>
</html>	

