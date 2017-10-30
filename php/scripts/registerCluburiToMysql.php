
<?php

require 'dbconnection.php';
require 'sessionActivation.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $db->real_escape_string($_POST["user"]);
    $pass = md5($db->real_escape_string($_POST["pass"]));
    $hash = md5(rand(0,1000));
    $mail = $db->real_escape_string($_POST["email"]);
}


$cluburiCreate = "CREATE TABLE ".$tableCluburi."(
    Nume varchar(50) NOT NULL,
    parola varchar(50) NOT NULL,
    Sportivi int NOT NULL,
    mail varchar(80) NOT NULL,
    hash varchar(50) NOT NULL,
    active int(1) NULL,
    PRIMARY KEY (Nume)
    )";
   


$result = $db->query("SHOW TABLES LIKE '".$tableCluburi."'");   

    if($result->num_rows > 0)
    {
        
        $sql = "SELECT * FROM ".$tableCluburi." WHERE mail='".$mail."'";
        $results = $db->query($sql);

        if ($results->num_rows > 0)
        {

            $_SESSION['message']="Adresa de mail este deja folosita";
            header("Location: http://localhost/php/pages/error.php");
            exit;
        }

        
    }
        else {
            if($db->query($cluburiCreate)==TRUE)
            {
                echo "0 results <br>";
            }
                else{
                    echo "creation failed <br>". $db->error."<br>";
                }
            
        }

        $sql = "INSERT INTO ".$tableCluburi."(Nume,parola,Sportivi,mail,hash,active)
        VALUES ('".$user."','".$pass."',0,'".$mail."','".$hash."','0')";

$msg = "Iti multumim pentru ca ti-ai facut cont pe Sportapp

Pentru a-ti activa contul te rugam sa accesezi urmatorul link:
http://localhost/php/scripts/activare.php?email=".$mail."&hash=".$hash;

if($db->query($sql) == TRUE)
{
    mail($mail,'Confirmare de creeare cont pe Sportapp',$msg);
    $_SESSION['message']="Contul dumneavoastra a fost creat. Accesati linkul primit pe mail pentru activare.";
    header("Location: http://localhost/php/pages/succes.php");

}
    else
    {
    $_SESSION['message']="A aparut o eroare in creearea contului dumneavoastra. Va rugam reincercati.";
    header("Location: http://localhost/php/pages/error.php");
        
    }
?>

