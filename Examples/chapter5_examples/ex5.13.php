<head><title>Logical XOR/title></title></head>
<html>
<body bgcolor="CC99CC"><font face="arial" size="+1">
<h3>Logical XOR</h3>
<?php

  $married = true;
  $single = true;
  if($married xor $single){ print "Status O.K.<br>"; }
  else{
    echo "Sorry, you can't have the best of both worlds. <br />
    You are either married or single. <br />
    Only one can be true. <br />";}
  ?>
</body>
</html>

