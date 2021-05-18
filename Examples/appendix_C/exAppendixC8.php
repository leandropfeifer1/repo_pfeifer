
<?php

echo "\nIs 12/31/2006 a valid date? ";
var_dump(checkdate(12, 31, 2006));
echo "\nIs 12/32/2006 a valid date? ";
var_dump(checkdate(12,32, 2006));
echo "Is this better? ";
// Let mktime() adjust the date to the correct date
echo date('m/d/Y', mktime(0,0,0, 12,32,2006)),"\n";
echo "\nIs 2/29/2008 a leap year? ";
var_dump(checkdate(2, 29, 2008));
echo "\nIs 2/29/2008 a leap year? ";
var_dump(checkdate(2, 29, 2006));

?>

