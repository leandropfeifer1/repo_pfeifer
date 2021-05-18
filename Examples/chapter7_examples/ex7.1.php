<html><head><title>Your Fare</title></head>
<body bgcolor="lightgreen">
<font face="arial" size="+1">
<p>
<?php

 extract($_REQUEST);
 if ( ! isset ( $submit_age )){ // Simple conditional
   exit;
 }

?>
<table border="1" cellpadding="10"><tr bgcolor="yellow">
<?php

  if ( $age >= 55 ){
     $price = 8.25;
     print "<td><b>Tu pagas \$$price, la tarifa de alto nivel</td>";
  }
   else{
     $price = 10.00;
     print "<td><b>Tu pagas \$$price tarifa regular para adultos.</td>";
  }

?>
