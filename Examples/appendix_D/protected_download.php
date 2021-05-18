<?php



if (isset($_POST["username"]) && ($_POST["username"] == "phpbee") && 

    isset($_POST["password"]) && ($_POST["password"] == "phpbee"))

  SendFile();

else

  DisplayLoginPage();



function DisplayLoginPage()

{

?>



<html>

  <head>

    <title>Protected download</title>

  </head>

  <body>

    <h2>Welcome to download area</h2>

    <p> Type username and password to download a file </p>

    <p> Type phpbee for both username and password </p>

    <form action="download.php" method="post">

      Username<br>

      <input type="text" name="username"><br>

      Password<br>

      <input type="password" name="password"><br>

      <input type="hidden" name="login"><br>

      <input type="submit">

      <input type="reset">

    </form>

  </body>

</html>



<?php

}



function SendFile()

{

  $FileName = "filename.zip";

  //header("Content-Type: " . mime_content_type($FileName));

  // if you are not allowed to use mime_content_type, then hardcode MIME type

  // use application/octet-stream for any binary file

  // use application/x-executable-file for executables

  // use application/x-zip-compressed for zip files

  

  header("Content-Type: application/octet-stream");

  header("Content-Length: " . filesize($FileName));

  header("Content-Disposition: attachment; filename=\"$FileName\"");

  header("Cache-Control: must-revalidate, post-check=0, pre-check=0");

  $fp = fopen($FileName,"rb");

  fpassthru($fp);

  fclose($fp);

}



?>