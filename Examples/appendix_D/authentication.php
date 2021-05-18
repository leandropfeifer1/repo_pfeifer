	a			
<?



class SecurityUser

{



    var $UserID;

    var $UserName;

    var $Name;

    var $Surname;

    var $EMail;



    function SecurityUser()

    {



    }



    function DBConnect()

    {

        // Database connection settings

        $DBServer   = "localhost";

        $DBUser     = "root";

        $DBPassword = "";

        $DBName     = "test";



        if ($this->DBLink = new mysqli($DBServer, $DBUser, $DBPassword, $DBName))

            return true;

        else

            return false;

    }



    function DBDisconnect()

    {

        if ($this->DBLink)

            $this->DBLink->close();

    }



    function CreateSecurityUsersTable()

    {

        $query =    "create table security_users ( " .

                        "userid int(11) NOT NULL auto_increment, " .

                        "username varchar(50), " .

                        "userpass varchar(50), " .

                        "name varchar(50), " .

                        "surname varchar(50), " .

                        "email varchar(50), " .

                        "primary key (userid), " .

                        "unique key UniqueUserNames (username))";

        $this->DBConnect();

        if ($result = $this->DBLink->query($query))

            echo "Success: User table created";

        else

            echo "Failure: " , $this->DBLink->error;

        $this->DBDisconnect();

    }



    function GetUsers()

    {

        $query = "select userid, username, name, surname, email from security_users";

        $this->DBConnect();

        $UserArray = array();

        if ($result = $this->DBLink->query($query))

        {

            while ($row = $result->fetch_assoc())

                $UserArray[$row["username"]] = $row;

            $result->free();

        }

        $this->DBDisconnect();

        return $UserArray;

    }



    function Insert()

    {

        $query = "insert into security_users (username, userpass, name, surname, email) " .

                 "values ('{$this->UserName}', password('{$this->UserPass}'), '{$this->Name}', '{$this->Surname}', '{$this->EMail}')";

        $this->DBConnect();

        if ($this->DBLink->query($query))

            $this->UserID = $this->DBLink->insert_id;

        else

            $this->UserID = -1;

        $this->DBDisconnect();

        return $this->UserID;

    }



    function Update()

    {

        $query = "update security_users set username = '{$this->UserName}', " .

                 "name = '{$this->Name}', surname = '{$this->Surname}', email = '{$this->EMail}') " . 

                 "where userid = {$this->UserID}";

        $this->DBConnect();

        if ($this->DBLink->query($query))

            $retval = true;

        else

            $retval = false;

        $this->DBDisconnect();

        return $retval;

    }



    function Delete()

    {

        $query = "delete from security_users where userid = '{$this->UserID}'";

        $this->DBConnect();

        if ($this->DBLink->query($query))

            $retval = true;

        else

            $retval = false;

        $this->DBDisconnect();

        return $retval;

    }



    function ChangePassword($old_password, $new_password)

    {

        $query = "update security_users set userpass = password('{$new_password}') " .

                 "where userid = {$this->UserID} and userpass = password('{$old_password}')";

        $this->DBConnect();

        $this->DBLink->query($query);

        if ($this->DBLink->affected_rows == 1)

            $retval = true;

        else

            $retval = false;

        $this->DBDisconnect();

        return $retval;

    }



    function CheckLoginCredentials($username, $password)

    {

        $query = "select userid from security_users where username = '{$username}' and userpass = password('{$password}')";

        $this->DBConnect();

        if (($result = $this->DBLink->query($query)) && ($result->num_rows == 1))

        {

            $result->free();

            $retval = true;

        }

        else

            $retval = false;

        $this->DBDisconnect();

        if ($retval)

            $this->GetUserInfoByName($username);

        return $retval;

    }



    function GetUserInfoByName($username)

    {

        $query = "select * from security_users where username = '{$username}'";

        $this->DBConnect();

        if ($result = $this->DBLink->query($query))

        {

            $row = $result->fetch_assoc();

            $this->UserID = $row["userid"];

            $this->UserName = $row["username"];

            $this->Name = $row["name"];

            $this->Surname = $row["surname"];

            $this->EMail = $row["email"];

            $result->free();

            $retval = true;

        }

        else

          $retval = false;

        $this->DBDisconnect();

        return $retval;

    }



    function GetUserInfoByID($userid)

    {

        $query = "select * from security_users where userid = '{$userid}'";

        $this->DBConnect();

        if ($result = $this->DBLink->query($query))

        {

            $row = $result->fetch_assoc();

            $this->UserID = $row["userid"];

            $this->UserName = $row["username"];

            $this->Name = $row["name"];

            $this->Surname = $row["surname"];

            $this->EMail = $row["email"];

            $result->free();

            $retval = true;

        }

        else

          $retval = false;

        $this->DBDisconnect();

        return $retval;

    }

}













// How to use



// Creeate object

$dbuser = new SecurityUser();



// Create DB table for storing usernames and passwords

$dbuser->CreateSecurityUsersTable();



// Adding new user

// Fill the values

$dbuser->UserName = "username";

$dbuser->UserPass = "password";

$dbuser->Name = "John";

$dbuser->Surname = "Doe";

$dbuser->EMail = "johndoe@nowhere.com";

// call Insert

$dbuser->Insert();



// Change password

if ($dbuser->ChangePassword("oldpass", "newpass"))

    echo "password changed";

else

    echo "password not changed";



// Check validity of usernam and password

if ($dbuser->CheckLoginCredentials("username", "password"))

    echo "Good";

else

    echo "Bad";    



// Change user info

// Fill the values

$dbuser->UserName = "new_username";

$dbuser->Name = "John Junior";

$dbuser->Surname = "Doe";

$dbuser->EMail = "johndoe_junior@nowhere.com";

// call Update

$dbuser->Update();



// Deleting user

// You need UserID field

$dbuser->UserID = 1;

// or

$dbuser->GetUserInfoByName("username");

// Call Delete

$dbuser->Delete();



// Get info about user. You can do that by name or by user ID

$dbuser->GetUserInfoByName("username");

$dbuser->GetUserInfoByID(1);





// printing all users

echo '<pre>';

print_r($dbuser->GetUsers());

echo '</pre>';



?>
