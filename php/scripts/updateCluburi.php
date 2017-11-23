<?php

require 'dbconnection.php';
require 'sessionActivation.php';
require 'loggedVerify.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if($_POST["pass"] != NULL)
    $pass = $db->real_escape_string($_POST["pass"]);

    $user = $db->real_escape_string($_POST["user"]);
    $mail = $db->real_escape_string($_POST["email"]);

}

if($_POST["pass"] != NULL)
{
    $sql = "UPDATE ".$tableCluburi." SET parola='".$pass."', Nume='".$user."', mail='".$mail."' WHERE hash='".$_SESSION['hash']."'";    
}
else
{
    $sql = "UPDATE ".$tableCluburi." SET Nume='".$user."', mail='".$mail."' WHERE hash='".$_SESSION['hash']."'";    
}

$results = $db->query($sql);

    $_SESSION['user']=$user;
    $_SESSION['message']="The changes were saved";
       header("Location: http://localhost/php/pages/succes.php");
       exit;


?>

