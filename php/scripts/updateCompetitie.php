<html>
<head>
<?php
    require '../scripts/loggedVerify.php';
    require '../scripts/dbconnection.php';
    require '../scripts/sessionActivation.php';
    require '../scripts/cat.php';
?>
</head>
<body>
<?php

    $nume = $db->escape_string($_POST['nume']);
    $data = $db->escape_string($_POST['data']);
    $hash = $db->escape_string($_GET['hash']);

    $sql = "SELECT nume FROM ".$tableCompetitii." WHERE hash='".$hash."'";
    $results = $db->query($sql);

    while($row = $results->fetch_assoc())
    {
        $spnume = $row['nume'];
    } 
    $oldnume = str_replace(' ', '',preg_replace("/[^A-Za-z0-9 ]/", '',$spnume));
    $spnume = str_replace(' ', '',preg_replace("/[^A-Za-z0-9 ]/", '',$nume));

    foreach($cat as $numeComp){
        
        $sql = "RENAME TABLE cattable".$oldnume."".$numeComp." TO cattable".$spnume."".$numeComp;
       $db->query($sql);
    }

    $sql = "UPDATE ".$tableCompetitii." SET nume='".$nume."' , data='".$data."' WHERE hash='".$hash."'";
    
    if($db->query($sql)==TRUE)
    {
        $_SESSION['message'] = "The competition was updated";
        header("Location: http://localhost/php/pages/succes.php");
        
    }
    else
    {   
        $_SESSION['message'] = "The competition was not updated, please retry";
        header("Location: http://localhost/php/pages/error.php");
    }
?>
</body>
</html>