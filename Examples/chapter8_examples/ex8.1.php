<html>
<head><title>Array of Products</title></head>
<body bgcolor="lightgreen">
<?php

  $products=array('floral talc','body mist', 'perfumed powder','bath gel');
  echo "<b>\$products is $products.<br>\n";
  echo "\$products[0] is $products[0].<br>\n";
  echo "\$products[1] is $products[1].<br>\n";
  echo "\$products[2] is $products[2].<br>\n";
  echo "\$products[3] is $products[3].<br>\n";

?>
<br><em>Let's add another element to the array.</em><br>
<?php
  $products[]='gentle soap';
  $products[]='tomate';
  echo "\$products[4] is $products[4].<br>\n";
  echo "\$products[5] is $products[5].<br>\n";
  $products[3]='jabon';
  echo "\$products[3] is $products[3].<br>\n";
?>
</body>
</html>
