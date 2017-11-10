<?php

require 'dbconnection.php';
require 'sessionActivation.php';



    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nume = $db->real_escape_string($_POST["nume"]);
        $prenume = $db->real_escape_string($_POST["prenume"]);
        $sex = $db->real_escape_string($_POST["sex"]);
        $categorie = $db->real_escape_string($_POST["categoria"]);
        $hash = md5(rand(1,1000));
    }

  
    $arbitriiCreate = "CREATE TABLE ".$tableArbitrii."(
        arbitruID int NOT NULL AUTO_INCREMENT,
        nume varchar(50) NOT NULL,
        prenume varchar(50) NOT NULL,
        sex varchar(1) NOT NULL,
        club int NOT NULL , 
        categorie varchar(50),
        hash varchar(50) NOT NULL,
        PRIMARY KEY (arbitruID),
        FOREIGN KEY (club) REFERENCES ".$tableCluburi." (cluburiId)
        )";
       
  

    $result = $db->query("SHOW TABLES LIKE '".$tableArbitrii."'");   

        if($result->num_rows > 0)
        {

        }
            else 
            {
                if($db->query($arbitriiCreate)==TRUE){}
                    else{
                        echo "creation failed <br>". $db->error."<br>";
                    }
                
            }
        
     
    $arbitriiInsert = "INSERT INTO ".$tableArbitrii."(nume,prenume,sex,club,categorie,hash)
                        VALUES ('".$nume."','".$prenume."','".$sex."','".$_SESSION['id']."','".$categorie."','".$hash."')";
    

    if($db->query($arbitriiInsert)==TRUE) {
         $_SESSION['message'] = "Succesfully register";
         header("Location: http://localhost/php/pages/succes.php");
    }
    else 
    {
        echo $db->error;
        exit;
        $_SESSION['message'] = "Unsuccesfully register, please retry";
         header("Location: http://localhost/php/pages/error.php");
    }


    
?>
