<!DOCTYPE html><head><title>Mixing HTML and PHP</title></head>
<body>
 <?php
  print '<font size="+100" font color="green" font face="verdana">'; // Wrong!!! Cannot place HTML directly
// into PHP script
 print "It's such a perfect day!<br>"; // okay here within
// the statement
?>
</body>
</html>
