<html>
<head><title>Search and Replace</title></head>
<body>
<?php
   $text = "Icecream is good for you. You should eat icecream daily.";
   $modified_text = str_replace( "icecream", "broccoli", $text );
   print "original: $text";
   print "<br>";
   print "modified: $modified_text <br>";
   
$phrase   = "You should eat fruits, vegetables, and fiber everyday.";
$healthy = array("fruits", "vegetables", "fiber");
$yummy   = array("pizza", "beer", "ice cream");

$newphrase = str_replace($healthy, $yummy, $phrase);
print "$newphrase";
?>
</body>
</html>

