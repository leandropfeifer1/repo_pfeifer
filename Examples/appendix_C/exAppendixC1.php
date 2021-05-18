<html><head><title>Using the date() Function</title></head>
<body bgcolor="lavender">
<font size="+1" face="verdana">
<?php
echo '1. <b>date("d-M-Y")</b> returns <em>',
date("d-M-Y"),"</em><br>";
echo '2. <b>date("M/d/Y")</b> returns <em>',
date("M/d/Y"),"</em><br>";
echo '3. <b>date("D dS M, Y h:i a")</b> returns <em>',
date("D dS M, Y h:i a"),"</em><br>";
echo '4. <b>date("\T\h\e \\t\i\m\e \i\s: h:m a")</b> returns<em> ',
date("\T\h\e \\t\i\m\e \i\s: h:m a"),"</em><br>";
echo '5. <b>date("\T\o\d\a\y \i\s: l")</b> returns <em>',
date("\T\o\d\a\y \i\s: l"), "</em><br>";
?>
</font>
</body>
</html>