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
    $msg = "Acceseaza urmatorul link pentru a-ti putea recupera parola:
    
    http://localhost/php/scripts/recover.php?email=".$mail."&hash=".$hash."";

    mail($mail,"Recuperare parola Sportapp",$msg);
    
    $_SESSION['message'] = "Un mail cu linkul de recuperare a fost trimis.";
    header('location: http://localhost/php/pages/succes.php');
    exit;
}
else 
{
    $_SESSION['message'] = "Nu exista un cont care sa contina mailul sau userul anterior";
    header('location: http://localhost/php/pages/error.php');
    exit;
}

?>