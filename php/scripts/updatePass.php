
<?php

require 'dbconnection.php';
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pass = md5($db->real_escape_string($_POST["pass"]));
}


$sql = "UPDATE ".$tableCluburi." SET parola='".$pass."' WHERE mail='".$_SESSION['mail']."'";

$results = $db->query($sql);


 $_SESSION['message']="Parola a fost updatata";
       header("Location: http://localhost/php/pages/succes.php");
       exit;


?>

