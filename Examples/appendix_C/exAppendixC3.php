<?php
echo time(),"\n"; // Now in seconds
print time() + (7 * 24 * 60 * 60); // Next week in seconds
echo date("M-d-Y", time()),"\n"; // Today
echo date("M-d-Y", time() + (7 * 24 * 60 * 60)),"\n"; // Next week
echo date("M-d-Y", time() - (7 * 24 * 60 * 60)),"\n"; // Last week
?>