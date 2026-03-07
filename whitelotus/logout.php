<?php
include 'usersession.php';
session_start();
//echo $_SESSION['uname'];
//echo $_SESSION['sessionid'];
$session_id=$_SESSION['sessionid'];
$uname=$_SESSION['uname'];
    if(!usersessioncheck($uname,$_SESSION['sessionid'])){
      Notdevam();  
    }
   /* if(!session_valid_id($session_id)){
      Notdevam();  
    }*/
    if($_SESSION['sessionid']!=session_id())
    {
        Notdevam(); 
    }
    

/*function session_valid_id($session_id)
{
    return preg_match('/^[-,a-zA-Z0-9]{1,128}$/', $session_id) > 0;
}*/

function Notdevam()
{

header("Location: https://whitelotustest.online/admin.php"); /* Redirect browser */
exit();	
}

if(!userloginout($uname)){
    echo "logging out has problem. contact with site admin.";
}
else
{   session_destroy();
    session_unset();
    header("Location: https://whitelotustest.online/admin.php");
    exit();
}

?>
