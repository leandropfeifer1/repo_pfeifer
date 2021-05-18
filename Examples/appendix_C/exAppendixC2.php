<?php

echo "Today in San Francisco it is ", strftime("%A, %x"),
 " and the time is ", strftime("%X"),".\n";
/* Set locale to Sweden */
setlocale(LC_ALL, 'sw');

echo "In Stockholm the current date: ",
      strftime("%A %d %B %Y") ,"\n";

setlocale(LC_ALL, 'fr');

echo "In Paris the current date: ",
      strftime("%A %d %B %Y") ,"\n";

setlocale(LC_ALL, 'sp');

echo "In Madrid the current date: ",
      strftime("%A %d %B %Y") ,"\n";
?>
