<html><head><title>Sorting an Array</title></head>
<body bgcolor="CCFFFF">
<font size="+1">
<pre>
<b>
Ordenar una matriz numéricamente
<br />
<?php

  $animals = array("5 perros", "15 gatos", "10 caballos", "1 mono", "1 gorilla", "2 cebras");
  sort($animals, SORT_NUMERIC);
  print_r($animals);

?>
</pre>
</b>
</body>
</html>
