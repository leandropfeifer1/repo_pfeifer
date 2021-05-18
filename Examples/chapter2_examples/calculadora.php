<?php
 extract($_REQUEST);
 $cadena2 = 'suma';
 $cadena3 = 'resta';
 $cadena4 = 'multiplicacion';
 $cadena5 = 'division';
 
 function simple
 {
	if ($resultado1==$cadena2){
		$resultado = $a+$b;
		echo "$resultado";
	}
	if ($cadena1==$cadena3)
	{
		$resultado = $a-$b;
		echo "$resultado";
	}
}

function compleja()
{
	if ($cadena1==$cadena4)
	{
		$resultado = $a*$b;
		echo "$resultado";
	}
	else
	if ($cadena1==$cadena5)
	{
		$resultado = $a/$b;
		
}
}

function imprimir()
{
		echo "$resultado";
}

if($cadena1==$cadena2)
{
	 simple();
	else
	 compleja();
}
	imprimir();
	
?>
  
