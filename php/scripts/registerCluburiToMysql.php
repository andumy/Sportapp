
<?php

require 'dbconnection.php';
session_start();


$nume = $prenume = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $db->real_escape_string($_POST["user"]);
    $pass = md5($db->real_escape_string($_POST["pass"]));
    $hash = md5(rand(0,1000));
    $mail = $db->real_escape_string($_POST["email"]);
}



$sql = "INSERT INTO ".$tableCluburi."(Nume,parola,Sportivi,mail,hash,active)
        VALUES ('".$user."','".$pass."',0,'".$mail."','".$hash."','0')";

$msg = "Iti multumim pentru ca ti-ai facut cont pe Sportapp

Pentru a-ti activa contul te rugam sa accesezi urmatorul link:
http://localhost/php/scripts/activare.php?email='".$mail."'&hash='".$hash."'";

if($db->query($sql) == TRUE){
    mail($mail,'Confirmare de creeare cont pe Sportapp',$msg);
    include("../../html/confirm.html");
}
    else{
        echo $db->error;
        include("../../html/confirm.html");
    }

?>

