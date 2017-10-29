<?php

require 'dbconnection.php';
require 'sessionActivation.php';



    
    $nume = $prenume = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nume = $db->real_escape_string($_POST["nume"]);
        $data = $db->real_escape_string($_POST["data"]);
        $organizator = $_SESSION['user'];
        
    }

    
    $competitiiCreate = "CREATE TABLE ".$tableCompetitii."(
        competitieID int NOT NULL AUTO_INCREMENT,
        nume varchar(50) NOT NULL,
        organizator varchar(50) NOT NULL,
        data date NOT NULL,
        PRIMARY KEY (competitieID)
        )";
       
  

    $result = $db->query("SHOW TABLES LIKE '".$tableCompetitii."'");   

        if($result->num_rows > 0)
        {

        }
            else 
            {
                if($db->query($competitiiCreate)==TRUE){}
                    else{
                        echo "creation failed <br>". $db->error."<br>";
                    }
                
            }
        
     
    $competitiiInsert = "INSERT INTO ".$tableCompetitii."(nume,organizator,data)
                        VALUES ('".$nume."','".$organizator."','".$data."')";
    

    if($db->query($competitiiInsert)==TRUE) {
         $_SESSION['message'] = "Adaugare reusita";
         header("Location: http://localhost/php/pages/error.php");
    }
    else 
    {
        
        $_SESSION['message'] = "Adaugare nereusita, va rugam reincercati";
         header("Location: http://localhost/php/pages/error.php");
    }


    
?>
