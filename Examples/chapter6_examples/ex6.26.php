<html>
<head><title>The strpos() Function</title></head>
<body bgcolor="lightgreen">
<h>Finding the Index Position of a Substring</h3>
<font size="+1">
<?php

  $email = "joe@yahoo.com";
  $position_of_at_symbol = strpos($email,'@');
  print "The starting position of the '@' symbol in <em>$email</em>: $position_of_at_symbol";
  $position_of_dot_symbol = strpos($email,'.com');
  print "<br>The starting position of '.com' in <em>$email</em>:
  $position_of_dot_symbol";

?>
</font>
</body>
</html>
EXPLANATION
