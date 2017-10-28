
<?php

require 'dbconnection.php';
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $db->real_escape_string($_POST["user"]);
    $pass = md5($db->real_escape_string($_POST["pass"]));
    $hash = md5(rand(0,1000));
    $mail = $db->real_escape_string($_POST["email"]);
}


$sql = "SELECT * FROM ".$tableCluburi." WHERE mail='".$mail."'";

$results = $db->query($sql);




if ($results->num_rows > 0)
{

    $_SESSION['message']="Adresa de mail este deja folosita";
       header("Location: http://localhost/php/pages/error.php");
       exit;
}

$sql = "INSERT INTO ".$tableCluburi."(Nume,parola,Sportivi,mail,hash,active)
        VALUES ('".$user."','".$pass."',0,'".$mail."','".$hash."','0')";

$msg = "Iti multumim pentru ca ti-ai facut cont pe Sportapp

Pentru a-ti activa contul te rugam sa accesezi urmatorul link:
http://localhost/php/scripts/activare.php?email='".$mail."'&hash='".$hash."'";

if($db->query($sql) == TRUE){
    mail($mail,'Confirmare de creeare cont pe Sportapp',$msg);
    $_SESSION['message']="Contul dumneavoastra a fost creat. Accesati linkul primit pe mail pentru activare.";
    header("Location: http://localhost/php/pages/succes.php");

}
    else{
       $_SESSION['message']="A aparut o eroare in creearea contului dumneavoastra. Va rugam reincercati.";
       header("Location: http://localhost/php/pages/error.php");
        
    }

?>

