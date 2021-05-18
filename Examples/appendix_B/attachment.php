					
<?php

// Reading file content

$FilePathName = "ATTACHMENT_PATH_FILENAME"; // e.g. /tmp/myapp/file.gz

$FileName = "JUST_ATTACHMENT_FILENAME"; // just file.gz

$FileHandle = fopen($FilePathName, "rb");

$FileContent = fread($FileHandle, filesize($FilePathName));

fclose($FileHandle);



// Encode file content

$AttachmentData = chunk_split(base64_encode($FileContent));



// Message text

$MsgHTMLPart = "

<html>

<head>

  <title>HTML message with attachment</title>

</head>

<body>

  <h2>Congratulation!</h2>

  <p>You have just learned how to send a HTML message with attachment</p>

</body>

</html>

";



// Forming message

$Recepient = "somebody@somewhere";

$MsgSubject = "Message subject";

// You must set sender through message header

$MsgHeader = "From: Sender name<sender@server>\n";



// These two lines marks message as multipart

$MsgHeader .= "MIME-Version: 1.0\n";

$MsgHeader .= "Content-Type: multipart/mixed; boundary=\"-----NSD35F65YGsgrg3-----\"";



// First part begins

$MsgBody = "

-------NSD35F65YGsgrg3-----

Content-Type: text/html; charset=us-ascii

Content-Transfer-Encoding: 8bit\n";



$MsgBody .= $MsgHTMLPart;



// Second part begins

$MsgBody .= "

-------NSD35F65YGsgrg3-----

Content-Type: application/octet-stream; name=\"" . $FileName . "\"

Content-Transfer-Encoding: base64

Content-Disposition: attachment; filename=\"" . $FileName . "\"\n\n";



$MsgBody .= $AttachmentData;



// Message ends

$MsgBody .= "\n-----NSD35F65YGsgrg3-------\n";



// Sending message

mail($Recepient, $MsgSubject, $MsgBody, $MsgHeader);

?>

					