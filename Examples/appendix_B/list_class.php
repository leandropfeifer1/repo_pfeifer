				
<?php

class emaillist

{



  var $DBServer   = "localhost";

  var $DBUser     = "root";

  var $DBPassword = "";

  var $DBName     = "test";



  var $DBLink;



  function DisplaySubscribeForm()

  {

?>

    <html>

      <head>

        <title>e-mail subscribe form</title>

      </head>

      <body>

        <h2>User subscription form</h2>

        <form action="emaillist.php" method="post">

          Name<br>

          <input type="text" name="f_name"><br>

          e-mail<br>

          <input type="text" name="f_eaddress"><br>

          <input type="hidden" name="subscribe"><br>

          <input type="submit">

        </form>

      </body>

    </html> 

<?php  

  }



  function DisplayUnsubscribeForm()

  {

?>

    <html>

      <head>

        <title>e-mail unsubscribe form</title>

      </head>

      <body>

        <h2>User unsubscription form</h2>

        <form action="emaillist.php" method="post">

          e-mail<br>

          <input type="text" name="f_eaddress"><br>

          <input type="hidden" name="unsubscribe"><br>

          <input type="submit">

        </form>

      </body>

    </html> 

<?php  

  }



  function DisplayWriteMessageForm()

  {

?>

    <html>

      <head>

        <title>Write message form</title>

      </head>

      <body>

        <h2>Write message form</h2>

        <form action="emaillist.php" method="post">

          Subject<br>

          <input type="text" name="f_subject"><br>

          Message body<br>

          <textarea name="f_message" rows=5 cols=40></textarea><br>

          <input type="hidden" name="send"><br>

          <input type="submit">

        </form>

      </body>

    </html> 

<?php  

  }



  function DBConnect()

  {

    if ($this->DBLink = new mysqli($this->DBServer, $this->DBUser, $this->DBPassword, $this->DBName))

      return $this->DBLink;

  }



  function DBDisconnect()

  {

    $this->DBLink->close();

  }



  function CreateAddressStorage()

  {

    $query = "create table addressstorage ( " .

                  "id int(11) NOT NULL auto_increment, " .

                  "name varchar(250), " .

                  "address varchar(250), " .

                  "primary key (Id))";

    $this->DBConnect();

    if ($result = $this->DBLink->query($query))

      echo "Success: Address storage created";

    else

      echo "Failure: " , $this->DBLink->error;

    $this->DBDisconnect();

  }



  function ListAddresses()

  {

    $query = "select * from addressstorage";



    $this->DBConnect();

    if ($result = $this->DBLink->query($query))

    {

?>

    <html>

      <head>

        <title>Address storage</title>

      </head>

      <body>

        <p> Address list </p>

        <pre>

<?php

      printf("%8s | %50s | %50s\n", "User ID", "Name", "Address");

      while ($row = $result->fetch_assoc())

        printf("%8d | %50s | %50s\n", $row["id"], $row["name"], $row["address"]);

?>

        </pre>

      </body>

    </html> 

<?php  

    }

    else

      echo "Failure: " , $this->DBLink->error;

    $this->DBDisconnect();

  }



  function Subscribe()

  {

    $query = "insert into addressstorage (name, address) " . 

             "values (\"" . $_POST["f_name"] . "\", \"" .

                          $_POST["f_eaddress"] . "\")";



    $this->DBConnect();

    if ($this->DBLink->query($query))

      echo "Success: User subscribed";  

    else

      echo "Failure: " , $this->DBLink->error;

    $this->DBDisconnect();

  }



  function Unsubscribe()

  {

    $query = "delete from addressstorage where address = \"" . $_POST["f_eaddress"] . "\"";

    $this->DBConnect();

    if ($this->DBLink->query($query))

      echo "Success: User unsubscribed";

    else

      echo "Failure: " , $this->DBLink->error;

    $this->DBDisconnect();

  }



  function SendMessages()

  {

    $query = "select * from addressstorage";



    $this->DBConnect();

    if ($result = $this->DBLink->query($query))

    {

?>

    <html>

      <head>

        <title>Sending messages</title>

      </head>

      <body>

        <p> Sending messages </p>

        <pre>

<?php

      $Header = "From: Email list deamon<sender@server>";

      printf("%50s | %8s\n", "Name", "Sent");

      while ($row = $result->fetch_assoc())

      {

        if (mail($row["address"], $_POST["f_subject"], $_POST["f_message"], $Header))

          printf("%50s | %8s\n", $row["address"], "Yes");

        else

          printf("%50s | %8s\n", $row["address"], "No");

      }

?>

        </pre>

      </body>

    </html> 

<?php  

    }

    else

      echo "Failure: " , $this->DBLink->error;

    $this->DBDisconnect();

  }

}





$el = new emaillist;



if (isset($_GET["create"]))

  $el->CreateAddressStorage();

else

if (isset($_GET["list"]))

  $el->ListAddresses();

else

if (isset($_POST["subscribe"]))

  $el->Subscribe();

else

if (isset($_GET["unsubscribe"]))

  $el->DisplayUnsubscribeForm();

else

if (isset($_POST["unsubscribe"]))

  $el->Unsubscribe();

else

if (isset($_GET["write"]))  

  $el->DisplayWriteMessageForm();

else

if (isset($_POST["send"]))  

  $el->SendMessages();

else

  $el->DisplaySubscribeForm();



?>

							