<?php

require 'dbconnection.php';
require 'sessionActivation.php';
require 'loggedVerify.php';


    
    $nume = $prenume = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nume = $db->real_escape_string($_POST["nume"]);
        $prenume = $db->real_escape_string($_POST["prenume"]);
        $sex = $db->real_escape_string($_POST["sex"]);
        $ziNastere = $db->real_escape_string($_POST["ziNastere"]);
        $gradval = $db->real_escape_string($_POST["gradval"]);
        $grad = $db->real_escape_string($_POST["grad"]);
        $greutate = $db->real_escape_string($_POST["greutate"]);
        $hash = $db->real_escape_string($_GET["hash"]);
    }

  
  
        
     
    $sportiviInsert = "UPDATE  ".$tableSportivi." SET nume='".$nume."' , prenume='".$prenume."' , sex='".$sex."' , ziNastere='".$ziNastere."' , greutate='".$greutate."' , gradval='".$gradval."' , grad='".$grad."' WHERE hash='".$hash."'  ";
                        
    

    if($db->query($sportiviInsert)==TRUE) {
         $_SESSION['message'] = "Succesful edit";
         header("Location: http://localhost/php/pages/succes.php");
    }
    else 
    {
        
        $_SESSION['message'] = "Unsuccesful edit, please retry";
         header("Location: http://localhost/php/pages/error.php");
    }


    
?>
