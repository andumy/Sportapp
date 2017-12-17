<?php

require 'dbconnection.php';
require 'sessionActivation.php';
require 'loggedVerify.php';


function get_string_between($string, $start, $end){
    $split_string       = explode($end,$string);
    foreach($split_string as $data) {
         $str_pos       = strpos($data,$start);
         $last_pos      = strlen($data);
         $capture_len   = $last_pos - $str_pos;
         $return[]      = substr($data,$str_pos+strlen($start),$capture_len);
    }
    return $return;
}


    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $hashstr = $db->real_escape_string($_POST["hash"]);
        $compHash = $db->real_escape_string($_POST["compHash"]);
    }
    $sql = "SELECT * FROM ".$tableCompetitii." WHERE hash='".$compHash."'";
    $results = $db->query($sql);
    while($numeComp = $results->fetch_assoc()){
        if($numeComp['nume'] != NULL) break;
    }
    $numeComp['nume'] = str_replace(' ', '',preg_replace("/[^A-Za-z0-9 ]/", '',$numeComp['nume']));

    $flag = 0;
    $hashArray = get_string_between($hashstr, '[hash]', '[/hash]');
    foreach($hashArray as $hash)
    {
       
        
        $sql = "SELECT * FROM ".$tableSportivi." WHERE hash='".$hash."'";
        $results = $db->query($sql);
        if($results->num_rows > 0)
            while($row = $results->fetch_assoc())
            {
                $birthDate = explode("-",$row['ziNastere']);
                if($birthDate[1] > date("m")) $age = date("Y") - $birthDate[0] - 1;
                if($birthDate[1] < date("m")) $age = date("Y") - $birthDate[0];
                if($birthDate[1] == date("m"))
                    {
                        if($birthDate[2] > date("d")) $age = date("Y") - $birthDate[0] - 1;
                        if($birthDate[2] <= date("d")) $age = date("Y") - $birthDate[0];
                    }

                    
                $tableString = ($age<18)? ("cattable".$numeComp['nume']."katau18".$row['sex']):("cattable".$numeComp['nume']."katap18".$row['sex']);
                
                $sql = "SELECT * FROM ".$tableString." WHERE hash='".$row['hash']."'";
                $occurance = $db->query($sql);
                if($occurance->num_rows == 0)
                {
                    $sql = "INSERT INTO ".$tableString."(nume,prenume,sex,club,ziNastere,greutate,gradval,grad,hash)
                    VALUES ('".$row['nume']."','".$row['prenume']."','".$row['sex']."','".$row['club']."','".$row['ziNastere']."','".$row['greutate']."','".$row['gradval']."','".$row['grad']."','".$row['hash']."')";
                    if($db->query($sql)){}
                        else{
                            $flag = 1;
                        }
                }
            }
    }

    if($flag)
    {
        $_SESSION['message'] = 'Register fail, please retry.';
        header("Location: http://localhost/php/pages/error.php");
    }
    else 
    {
        $_SESSION['message'] = 'Register succes.';
        header("Location: http://localhost/php/pages/succes.php");
    }

    
?>
