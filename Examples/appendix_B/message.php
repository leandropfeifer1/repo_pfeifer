				
<?php

$Recepient = "somebody@somewhere";

$MsgSubject = "Message subject";

// You must set sender through message header

$MsgHeader = "From: Sender name<sender@server>\n";

$MsgBody = "Message body.";

mail($Recepient, $MsgSubject, $MsgBody, $MsgHeader);

?>

				