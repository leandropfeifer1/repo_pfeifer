
<?php

echo date("M-d-Y", mktime(0, 0, 0, 7, 18, 2007)), "\n";
echo date("M-d-Y", mktime(0, 0, 0, 1, 1, 07)), "\n";
echo date("M-d-Y", mktime(0, 0, 0, 7, 32, 7 )), "\n";

?>
<html><head><title>Using the date() Function</title></head>
<body bgcolor="lavender">
<font size="+2" face="verdana">
<?php

$today=mktime(0,0,0, date("m"),date("d"),date("Y"));
echo strftime("Today is %m/%d/%Y",$today),".<br>";
$tomorrow = mktime(0, 0, 0, date("m"),date("d")+1, date("Y"));
echo strftime("Tomorrow is %A", $tomorrow),".<br>";
$yesterday = mktime(0, 0, 0, date("m") , date("d")-1, date("Y"));
echo strftime("Yesterday was %A", $yesterday),".<br>";
$nextmonth = mktime(0, 0, 0, date("m")+1, date("d"), date("Y"));
echo strftime("Next month is %B", $nextmonth),".<br>";
$lastmonth = mktime(0, 0, 0, date("m")-1, date("d"), date("Y"));
echo strftime("Last month was %B", $lastmonth),".<br>";
$nextyear = mktime(0, 0, 0, date("m"), date("d"), date("Y")+1);
echo strftime("Next year is %Y", $nextyear),".<br>";
$lastyear = mktime(0, 0, 0, date("m"), date("d"), date("Y")-1);
echo strftime("Last year was %Y", $lastyear),".<br>";

?>
</font>
</body>
</html>
