
<?php

// Getting the timestamp from strings
echo strtotime("last month"), "\n";
echo strtotime("02 September 2006"), "\n";
echo strtotime("+2 days"), "\n";
echo strtotime("+1 week"), "\n";
echo strtotime("+1 week 2 days 4 hours 2 seconds"), "\n";
echo strtotime("next Thursday"), "\n";
// Using getdate() and strtotiime()
$tomorrow=strtotime("+1 day"); // Convert string to timestamp
$tomorrow=getdate($tomorrow); // Use timestamp to get readable date
echo "Tomorrow is $tomorrow[month]
$tomorrow[mday],$tomorrow[year].\n";
$next_week= strtotime("next week");
$next_week=getdate($next_week);
echo "I go on vacataion next $next_week[weekday].\n";
// Using strftime() and strtotime()
echo "Last Monday was ", strftime("%m/%d/%y", strtotime(
"last Monday")), ".\n";
echo "Next month is ", strftime("%B", strtotime("last month")),".\n";
echo "Next month is ", strftime("%B", strtotime("+1 month")),".\n";
?><?php

echo date("M-d-Y", mktime(0, 0, 0, 7, 18, 2007)), "\n";
echo date("M-d-Y", mktime(0, 0, 0, 1, 1, 07)), "\n";
echo date("M-d-Y", mktime(0, 0, 0, 7, 32, 7 )), "\n";

?>
