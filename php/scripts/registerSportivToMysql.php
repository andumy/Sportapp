<?php

require 'dbconnection.php';
session_start();



    
    $nume = $prenume = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nume = $db->real_escape_string($_POST["nume"]);
        $prenume = $db->real_escape_string($_POST["prenume"]);
        $sex = $db->real_escape_string($_POST["sex"]);
        $ziNastere = $db->real_escape_string($_POST["ziNastere"]);
        $gradval = $db->real_escape_string($_POST["gradval"]);
        $grad = $db->real_escape_string($_POST["grad"]);
        $greutate = $db->real_escape_string($_POST["greutate"]);
    }

    
    $sportiviCreate = "CREATE TABLE ".$tableSportivi."(
        sportivID int NOT NULL AUTO_INCREMENT,
        nume varchar(50) NOT NULL,
        prenume varchar(50) NOT NULL,
        sex varchar(1) NOT NULL,
        club varchar(50) NOT NULL , 
        ziNastere date NOT NULL,
        greutate int,
        gradval int,
        grad varchar(1),
        PRIMARY KEY (sportivID),
        FOREIGN KEY (club) REFERENCES ".$tableCluburi."(Nume)
        )";
       
  

    $result = $db->query("SHOW TABLES LIKE '".$tableSportivi."'");   

        if($result->num_rows > 0){}
            else {
                if($db->query($sportiviCreate)==TRUE){}
                    else{
                        echo "creation failed <br>". $db->error."<br>";
                    }
                
            }
        
     
    $sportiviInsert = "INSERT INTO ".$tableSportivi."(nume,prenume,sex,club,ziNastere,greutate,gradval,grad)
                        VALUES ('".$nume."','".$prenume."','".$sex."','".$_SESSION['user']."','".$ziNastere."','".$greutate."','".$gradval."','".$grad."')";
    

    if($db->query($sportiviInsert)==TRUE) {
         $_SESSION['message'] = "Adaugare reusita";
         header("Location: http://localhost/php/pages/error.php");
    }
    else 
    {
        
        $_SESSION['message'] = "Adaugare nereusita, va rugam reincercati";
         header("Location: http://localhost/php/pages/error.php");
    }


    
?>
