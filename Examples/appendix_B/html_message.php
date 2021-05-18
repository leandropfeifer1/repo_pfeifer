				
<?php

$Recepient = "somebody@somewhere";

$MsgSubject = "Message subject";

// You must set sender through message header

$MsgHeader = "From: Sender name<sender@server>\n";

// You need these two lines

$MsgHeader .= "MIME-Version: 1.0\n";

$MsgHeader .= "Content-type: text/html; charset=us-ascii\n";

// Message body is HTML

$MsgBody = "

<html>

<head>

  <title>HTML message</title>

</head>

<body>

  <h2>Congratulation!</h2>

  <p>You have just learned how to send a HTML message</p>

</body>

</html>";

mail($Recepient, $MsgSubject, $MsgBody, $MsgHeader);

?>

				