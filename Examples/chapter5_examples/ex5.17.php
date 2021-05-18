<html><head><title>Conditional Statement</title></head>
<body bgcolor="lightgreen"><font size="+1">

<?php

 extract($_REQUEST);
 
$price = ($age > 55 || $age < 18)? 3.00: 8.50;#FF0000
 
 /* Otra solucion con IF
 
 if($age >= 55){$price = 3.00;}
 else if($age < 55 && $age >= 18) {$price = 8.50;}
 else{$price = 3.00;}*/
 
 /* Otra solucion con SWITCH
 
 switch($age){
	 case $age<18: $price = 5.00; break;
	 case $age>=18 && $age<=55: $price = 8.50; break;
	 case $age>55: $price = 5.50; break;
}
 */
 print "$name, age $age pays \$$price for the Happy Meal
 Special! <br />";
?>

</body>
</html>
</body>
</html>
