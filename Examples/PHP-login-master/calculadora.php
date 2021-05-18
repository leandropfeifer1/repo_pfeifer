<?php
 extract($_REQUEST);
 $cadena2 = 'suma';
 $cadena3 = 'resta';
 $cadena4 = 'multiplicacion';
 $cadena5 = 'division';
 if ($cadena1==$cadena2)
	{
		$resultado = $a+$b;
		echo "$resultado";
	}
	else
	if ($cadena1==$cadena3)
	{
		$resultado = $a-$b;
		echo "$resultado";
	}
	if ($cadena1==$cadena4)
	{
		$resultado = $a*$b;
		echo "$resultado";
	}
	else
	if ($cadena1==$cadena5)
	{
		$resultado = $a/$b;
		echo "$resultado";
	}
?>
  
