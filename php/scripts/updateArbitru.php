<?php

require 'dbconnection.php';
require 'sessionActivation.php';
require 'loggedVerify.php';


    
    $nume = $prenume = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nume = $db->real_escape_string($_POST["nume"]);
        $prenume = $db->real_escape_string($_POST["prenume"]);
        $sex = $db->real_escape_string($_POST["sex"]);
        $categorie = $db->real_escape_string($_POST["categorie"]);
        $hash = $db->real_escape_string($_GET["hash"]);
    }

  
  
        
     
    $arbitruInsert = "UPDATE  ".$tableArbitrii." 
                      SET nume='".$nume."' , 
                      prenume='".$prenume."' ,
                      sex='".$sex."' ,
                      categorie='".$categorie."'
                      WHERE hash='".$hash."'  ";
                        
    

    if($db->query($arbitruInsert)==TRUE) {
         $_SESSION['message'] = "Succesful edit";
         header("Location: http://localhost/php/pages/succes.php");
    }
    else 
    {
        $db->error;
        exit;
        $_SESSION['message'] = "Unsuccesful edit, please retry";
         header("Location: http://localhost/php/pages/error.php");
    }


    
?>
