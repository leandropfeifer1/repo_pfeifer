<html>
<head><title>Using a Negative Index</title></head>
<body bgcolor="lightgreen">
<b>
<?php

  $colors=array(-1 =>'purple','orange',"brown"=>"burnt sienna");
  $colors[]=255;
  echo "\$colors[-1] is ". $colors[-1] . ".<br>";
  echo "\$colors[0] is $colors[0].<br>";
  echo "\$colors[1] is $colors[1].<br>";
  echo "\$colors['brown'] is " . $colors['brown'] . ".<br>";
  // echo "\$color['brown'] is {$colors['brown']}<br>";

?>
</b>
</body>
</html>
