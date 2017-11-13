<?php

require 'dbconnection.php';
require 'sessionActivation.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = $db->real_escape_string($_POST['data']);
}

$sql = "SELECT * FROM ".$tableCluburi." WHERE mail='".$data."'OR Nume='".$data."'";
$results = $db->query($sql);
if($results->num_rows > 0)
{
    $row = $results->fetch_assoc();
    $mail = $row['mail'];
    $hash = $row['hash'];
    $msg = "Acces the following link to change your password
    
    http://localhost/php/scripts/recover.php?email=".$mail."&hash=".$hash."";

    mail($mail,"Recovery mail from Sportapp",$msg);
    
    $_SESSION['message'] = "A recovery link was sent to ".$mail;
    header('location: http://localhost/php/pages/succes.php');
    exit;
}
else 
{
    $_SESSION['message'] = "The account was not found";
    header('location: http://localhost/php/pages/error.php');
    exit;
}

?>