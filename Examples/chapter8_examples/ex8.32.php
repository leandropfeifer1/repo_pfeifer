<html><head><title>Sorting an Array</title></head>
<body bgcolor="CCCFFF">
<font style="arial" size="+1">
<table border="2" cellspacing="3">
<caption>Clasificación por valores</caption>
<tr><td>
<?php

  $states = array("HI"=>"Hawaii",
                  "ME"=>"Maine",
                  "MT"=>"Montana",
                  "CA"=>"California",
                  "AZ"=>"Arizona",
                  "MD"=>"Maryland",
  );
  asort($states);
  while (list($key, $val) = each($states)) {
     echo "states[" . $key . "] => ". "<b>$val</b>\n<br />";
  }

?>
</td></tr>
</table>
</body>
</html>
