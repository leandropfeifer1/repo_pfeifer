<?php
 extract($_REQUEST);
 $cadena2 = 50;
 $cadena3 = 150;
 $cadena4 = 250;
 $cadena5 = 251;
 if ($k<=$cadena2)
	{
		$resultado = 3.5*$k;
	}
	else
	if ($k<=$cadena3)
	{	
		$k=$k-50;
		$resultado = 50 *3.5;
		$resultado1 = 4*$k;
		$resultado = $resultado+$resultado1;
	}
	else
	if ($k<=$cadena4)
	{	
		$k=$k-150;
		$resultado = 50 *3.5;
		$resultado1 = 100*4;
		$resultado2 = 5.2*$k;
		$resultado = $resultado+$resultado1+$resultado2;
	}
	else
	if ($k>=$cadena5)
	{	
		$k=$k-250;
		$resultado = 50 *3.5;
		$resultado1 = 100*4;
		$resultado2 = 100 *5.2;
		$resultado3 = 6.5*$k;
		$resultado = $resultado+$resultado1+$resultado2+$resultado3;
	}
	
	
	echo "$resultado";
?>
  
