<head><title>Merging Associative Arrays</title></head>
<body bgcolor="lightblue">
<h3>Merging Associative Arrays</h3>
<pre>
<?php

  $cyclewear1=array('item'=>'jersey', 'color'=>'blue', 'type'=> 'hooded');
  $cyclewear2=array('size'=>'large','color'=>'white', 'cost'=>'145');
  echo 'After merging $cyclewear1 and $cyclewear2',"<br />";
  $merged=array_merge_recursive($cyclewear1, $cyclewear2);
  print_r($merged);

?>
</pre>
</body>
</html>
