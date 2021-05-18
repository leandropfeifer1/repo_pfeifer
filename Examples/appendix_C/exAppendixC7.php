
<?php

$date=mktime(0, 0, 0, 12, 25, 2006); // Christmas 2006
$holiday=getdate($date);
print_r($holiday);
echo "$holiday[month] $holiday[mday], $holiday[year] is on a ",
$holiday["weekday"], ".\n<br>";

?>