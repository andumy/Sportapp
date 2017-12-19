<?php

require 'dbconnection.php';
require 'sessionActivation.php';
require 'loggedVerify.php';


    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $data = $_POST["update"];
        $cat = $db->real_escape_string($_POST["cat"]);
    }

        $jsonData = json_decode($data);
        foreach($jsonData as $json){
            echo $json->hash;

            $sql = "UPDATE ".$cat."
            SET loc='".$json->place."'
            WHERE hash='".$json->hash."'
            ";

            if($db->query($sql)==TRUE) {
                $_SESSION['message'] = "Save succed";
                header("Location: http://localhost/php/pages/succes.php");
           }
           else 
           {
               echo $db->error;
               $_SESSION['message'] = "Unsuccesful save, please retry";
                header("Location: http://localhost/php/pages/error.php");
           }
        }
?>
