<?php

require 'dbconnection.php';
require 'sessionActivation.php';



    
    $nume = $prenume = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nume = $db->real_escape_string($_POST["nume"]);
        $data = $db->real_escape_string($_POST["data"]);
        $organizator = $_SESSION['id'];
        $hash = md5(rand(0,1000));
    }

    
    $competitiiCreate = "CREATE TABLE ".$tableCompetitii."(
        competitieID int NOT NULL AUTO_INCREMENT,
        nume varchar(50) NOT NULL,
        organizator int NOT NULL,
        data date NOT NULL,
        hash varchar(50) NOT NULL,
        PRIMARY KEY (competitieID),
        FOREIGN KEY (organizator) REFERENCES ".$tableCluburi." (cluburiId)
        )";
       
  

    $result = $db->query("SHOW TABLES LIKE '".$tableCompetitii."'");   

        if($result->num_rows > 0)
        {

        }
            else 
            {
                if($db->query($competitiiCreate)==TRUE)
                {

                }
                    else{
                        echo "creation failed <br>". $db->error."<br>";
                    }
                
            }
        
     
    $competitiiInsert = "INSERT INTO ".$tableCompetitii."(nume,organizator,data,hash)
                        VALUES ('".$nume."','".$_SESSION['id']."','".$data."','".$hash."')";
    

    if($db->query($competitiiInsert)==TRUE) {
        

         $_SESSION['message'] = "Succesfully register";
         header("Location: http://localhost/php/pages/succes.php");
    }
    else 
    {
        $_SESSION['message'] = "Unsuccesfully register, please retry";
         header("Location: http://localhost/php/pages/error.php");
    }


    
?>
