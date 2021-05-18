				
<?php

    // Data has been submitted by web form. We will inspect it...

    // if you are expecting to receive UserName,
    // ensure you have receive it
    if ( ! isset($_REQUEST['UserName']))
    {
        echo "UserName is not submited."
        exit;        
    }

    // if you are expecting UserName as a string,
    // ensure you have receive it
    $UserName = $_REQUEST['UserName'];
    if (is_string($UserName))
    {
        echo "Error: User name is not a string."
        exit;        
    }

    // if you are expecting a string of maxlength 30,
    // ensure you have received it
    $UserName = $_REQUEST['UserName'];
    if (strlen($UserName) > 30)
    {
        echo "Error: User name is longer than 30 chars."
        exit;        
    }

    // if you are expecting UserID as integer,
    // ensure you have received it
    $UserID = $_REQUEST['UserID'];
    if ( ! is_integer($_REQUEST['UserID']))
    {
        echo "Error: UserID should be integer number, but it is not."
        exit;        
    }

    // if you are expecting UserID as integer, between 10 and 20,
    // ensure you have received it
    $UserID = $_REQUEST['UserID'];
    if ( (! is_integer($UserID)) && ($UserID < 10) && ($UserID > 20))
    {
        echo "Error: UserID should be integer number, between 10 and 20, but it is not."
        exit;        
    }

    // if you are expecting values UserName, UserID and Password
    // ensure you have received them
    $UserName = $_REQUEST['UserName'];
    $UserID = $_REQUEST['UserID'];
    $Password = $_REQUEST['Password'];
    if (empty($UserName) || empty($UserID) || empty($Password))
    {
        echo "Error: You should send me a UserName, UserID and Password, but you did not."
        exit;        
    }

    // etc... A lot of various checks...
    
    // Process data here...

?>

				